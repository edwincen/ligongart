<?php

class XiaoguoAction extends CommonAction{
    function index(){
    	
    	$model = M('Category');
        $condition['id'] = '69';
        $data = $model->where($condition)->find();
        $this->assign("data",$data);
        $this->display();

    }
    function chengguo(){
    	
    	$model = M('Category');
        $condition['id'] = '70';
        $data = $model->where($condition)->find();
        $this->assign("data",$data);
        $this->display();

    }

    
}

?>