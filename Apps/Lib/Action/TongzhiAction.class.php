<?php

class TongzhiAction extends CommonAction{
    function index(){
    	
    	$Model=M('Model');
    	$name="Article";
    	$map['catid'] = array('eq','50');
        $map['table']=array('eq',$name);
        $pageinfo=$Model->where($map)->find();

        $Form   =   M($name);
        import("@.ORG.Page");       //导入分页类
        $count  = $Form->where($map)->count();    //计算总数
        $Page = new Page($count, $pageinfo['listrows']);
        $list   = $Form->where($map)->limit($Page->firstRow. ',' . $Page->listRows)->order('listorder,id desc')->select();
        foreach ($list as &$value) {
        	$value['content'] = strip_tags($value['content']);
        }
        // 设置分页显示
        $Page->setConfig('header', $pageinfo['header']);
        $Page->setConfig('first', $pageinfo['first']);
        $Page->setConfig('last', $pageinfo['last']);
        $Page->setConfig('prev', $pageinfo['prev']);
        $Page->setConfig('next', $pageinfo['next']);
        $Page->setConfig('theme',$pageinfo['theme']);
        $page = $Page->show();
        $this->assign("page", $page);
        $this->assign('list',$list);
    	$this->display();
    }

    function show(){
        $id= I('id');
        $name = "Article";
        
        D($name)->where('id='.$id)->setInc('hits',1);//浏览次数
       
        $model=M($name);

        //当前记录
        $data=$model->find($id);
        $this->assign("data",$data);
        $this->display();

    }
    
}

?>