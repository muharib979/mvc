<?php

/**
* Category controller
*/
class Category extends Dcontroller{
	
	  public function __construct()
	{
		parent::__construct();
	}
	public function categoryList(){
		$data = array();
		$table = "category";
		$catModel = $this->load->model("CatModel");
		$data['cat'] = $catModel->catList($table);
		$this->load->view("category", $data);
	}


	public function catById(){
		$data = array();
		$table = "category";
		$id = 5;
		$catModel = $this->load->model("CatModel");
		$data['catbyid'] = $catModel->catById($table, $id);
		$this->load->view("catbyid", $data);
	}
	public function addCategory(){


		$this->load->view("addcategory");
	}

	public function insertCategory(){
		$table= "category";

		$name = $_POST['name'];
		$title = $_POST['title'];
		
		
		
		
		$data = array(

			'name'  => '$name',
			'title'  => '$title'
			

			);
		$catModel = $this->load->model("CatModel");
		$result = $catModel->insertCat($table ,$data);
		$mdata = array();
		if ($result == 1) {
			$mdata['msg'] = "Category Added Successfully";
		}else{
			$mdata['msg'] = "Category Not Added";
		}
		$this->load->view("addcategory",$mdata);

}
	
	public function updateCategory(){
     
		$table = "category";
		$id = 3;
		$catModel = $this->load->model("CatModel");
		  $data = array();
		$data['catById'] = $catModel->catById($table, $id);
		$this->load->view("catupdate", $data);
		
		
	}

	
	public function updateCat(){
		
		$table = "category";
		$id = $_POST['id'];
		$name = $_POST['name'];
		$title = $_POST['title'];
		
		
		
	    $cond = "id=$id";
		$data = array(

			'name'  => '$name',
			'title'  => '$title'
			

			);
	
		

		 $catModel = $this->load->model("CatModel");
		 $result = $catModel->catUpdate($table, $data,$cond);
		 $mdata = array();
		if ($result == 1) {
			$mdata['msg'] = "Category Updated Successfully";
		}else{
			$mdata['msg'] = "Category Not Updated";
		}
		$this->load->view("catupdate",$mdata);
		
}
	public function deleteCatById(){
		$table = "category";
		$cond = "id=2";
		$catModel = $this->load->model("CatModel");
		 $catModel->delCatById($table,$cond);
	}
}

?>