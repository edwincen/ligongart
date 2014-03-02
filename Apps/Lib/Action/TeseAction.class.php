<?php

class TeseAction extends CommonAction{
    function index(){
    	
    	$model = M('Category');
        $condition['id'] = '73';
        $data = $model->where($condition)->find();
        $this->assign("data",$data);
        $this->display();

    }
    function fushe(){
    	
    	$model = M('Category');
        $condition['id'] = '74';
        $data = $model->where($condition)->find();
        $this->assign("data",$data);
        $this->display();

    }

    
}

?>