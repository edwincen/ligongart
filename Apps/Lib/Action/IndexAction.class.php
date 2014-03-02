<?php

class IndexAction extends CommonAction {

    public function index(){
        
        //友情链接
        $model=D('Announce');

        $list=$model->select();

        $this->assign('info_list',$list);
        $position[]=array('id'=>0,'catname'=>'首页');
        $this->seo(C(SITE_TITLE), C(SITE_KEYWORDS), C(SITE_DESCRIPTION), $position);
        $this->list=$list;
        //Cookie::set('_currentUrl_', __SELF__);
        session('_currentUrl_', __SELF__);
        $this->display();
    }
 
}