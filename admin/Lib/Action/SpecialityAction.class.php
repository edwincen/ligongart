<?php 
class SpecialityAction extends Action{
	//查找专业列表
	public function index(){
		
		$this->display();
	}

	public function _before_add(){
		$sessionModel = M("Session");
		$this->assign("sessionInfo",$sessionModel->select());	
	}
	
	//添加专业
	public function add(){
		$this->display();
	}
	
	public function checkSpecialityExists(){
		$sessionModel = M("Session");
		$condition['name'] = $_REQUEST['name'];
		$sessionModel->where($condition)->count()>0? $this->ajaxReturn(0,"已存在当前所属级",0): $this->ajaxReturn(1,"可添加",1);
	}

	//更新专业
	public function update(){

	}

	//删除专业
	public function delete(){

	}
}
?>