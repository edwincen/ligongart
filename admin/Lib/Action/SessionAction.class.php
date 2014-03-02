<?php 
class SessionAction extends Action{
	
	//查找所属级列表
	public function index(){
		$sessionModel = M("Session");
		$sessionInfo = $sessionModel->select();
		
		$this->assign("sessionInfo",$sessionInfo);
		$this->display();
	}
	
	//添加所属级
	public function add(){
		$this->display();
	}
	
	public function insert(){
		$sessionModel = M("Session");
		$data['name'] = $_REQUEST['name'];
		$sessionModel->add($data);
		$this->success("添加成功!");
	}
	
	public function checkSessionExists(){
		$sessionModel = M("Session");
		$condition['name'] = $_REQUEST['name'];
		$sessionModel->where($condition)->count()>0? $this->ajaxReturn(0,"已存在当前所属级",0): $this->ajaxReturn(1,"可添加",1);
	}
	
	//更新所属级
	public function edit(){
		$name = $_REQUEST['name'];
		$id = $_REQUEST['id'];
		
		if($name != null && $id != null){
			$this->assign("name",$name);
			$this->assign("id",$id);
			$this->display();
		}else{
			$this->error("请选择修改的所属级!");
		}
	}
	
	public function update(){
		$sessionModel = M("Session");
		$condition['id'] = $_REQUEST['id'];
		$data['name'] = $_REQUEST['name'];
		
		$sessionModel->where($condition)->save($data);
		$this->success("修改成功!");
	}
	
	//删除所属级
	public function delete(){
		$sessionModel = M("Session");
		$condition['id'] = $_REQUEST['id'];
		
		$sessionModel->where($condition)->delete();
		$this->success("删除成功!");
	}
}
?>