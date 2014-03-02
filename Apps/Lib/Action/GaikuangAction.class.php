<?php

class GaikuangAction extends CommonAction{
    function index(){
    	
        $model = M('Category');
        $condition['pid'] = '12';
        $subs = $model->where($condition)->order('listorder,id desc')->select();
        $data = array();
        $data['items'] = array();
        foreach ($subs as $value) {
            if ($value['id'] == '77') {
                $data['content'] = $value['content'];
                $data['title'] = $value['title'];
                continue;
            }
            $item['title'] = $value['title'];
            $item['id'] = $value['id'];
            $map['pid'] = $value['id'];
            $item['data'] = $model->where($map)->order('listorder,id desc')->select();
            array_push($data['items'], $item);
        }
        $this->assign("data",$data['items']);
        $this->assign('content',$data['content']);
        $this->display();



    }

    function show(){

        $id= I('id');
        $model = M('Category');
        $condition['pid'] = '12';
        $subs = $model->where($condition)->order('listorder,id desc')->select();
        $data = array();
        $data['items'] = array();
        foreach ($subs as $value) {
            if ($value['id'] == '77') {
                continue;
            }
            $item['title'] = $value['title'];
            $item['id'] = $value['id'];
            $map['pid'] = $value['id'];
            $item['data'] = $model->where($map)->order('listorder,id desc')->select();
            foreach ($item['data'] as $value) {
            if ($value['id'] == $id) {
                $data['content'] = $value['content'];
                $data['title'] = $value['title'];
                break;
            }
        }
            array_push($data['items'], $item);
        }
        
        $this->assign("data",$data['items']);
        $this->assign('content',$data['content']);
        $this->assign('title',$data['title']);
        $this->assign('id',$id);

        $this->display();

    }
    
}

?>