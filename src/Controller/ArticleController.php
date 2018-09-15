<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
class ArticleController extends AppController {
	public function index() {
		$plb = TableRegistry::get('phanloaibai');
	$lt=$plb->find()->select(['idloai','tenloai'])
	->where(array('anhien' => 1,'lang'=>'vi','idcha'=>0));
	$this->set('lt', $lt);
	$bv= TableRegistry::get('baiviet');
	

	$this->set('bv', $bv);
			
		$this->render('baimoi' ,'trangchu' );
	}
	public function b($id=0){
	$bv = TableRegistry::get('Baiviet');
	$kq = $bv->find()
		->select(['idbv','tieude','tomtat','ngay','solanxem','content'])
		->where(['idbv =' => $id]);
	$row = $kq->toArray();  //print_r($kq); //print_r($row);  
	
	$this->set(array('row'=>$row));
	$this->viewBuilder()->layout('trangchu');
	}
	public function test(){

		
		$this->viewBuilder()->layout('trangchu');
	}
	public function baitrongloai($idloai=0,$offset=1){
		$plb = TableRegistry::get('phanloaibai');
		$kq = $plb->find()->select(['tenloai'])->where(['idloai' => $idloai]);	
		if ($kq) {
			$row = $kq->toArray();  
			$tenloai=$row[0]["tenloai"];
		}
		else $tenloai="";	
		$this->set('tenloai', $tenloai);
		/*$bv = TableRegistry::get('Baiviet');
		$btl = $bv->find()
			->select(['idbv','tieude','tomtat','ngay','solanxem','urlhinh'])
			->where(['idloai' => $idloai])->order(['idbv'=>'DESC'])->limit(5);
		$this->set('btl',$btl); */		
		$this->paginate=array('fields'=>array('idbv','tieude','tomtat','ngay','solanxem','urlhinh'),
				'conditions'=>array('idloai'=>$idloai),
				'order'=>array('idbv' => 'DESC'), 
		       'limit'=>3 
		); 
		$this->set('btl', $this->paginate());		
		$this->viewBuilder()->layout('trangchu'); 
		}//baitrongloai


   	
}
