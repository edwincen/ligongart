<?php

class JiagouAction extends CommonAction{
    function index(){
    	
        $model = M('Category');
        $condition['id'] = '44';
        $data = $model->where($condition)->find();
        $this->assign("data",$data);
        $this->display();



    }

    
}

?>