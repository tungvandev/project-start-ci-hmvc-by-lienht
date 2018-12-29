<?php
/**
 * Created by PhpStorm.
 * User: HOANG LIEN
 * Date: 29/05/2018
 * Time: 2:52 CH
 */
class Page_Pagination extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('page');
    }

    public function demo_phan_trang($page){
        $item = 3;

//        $total = $this->page->soBanGhi();
//        $soTrang = $total/$item;

        $start = ($page -1 )*$item;
        $news_list = $this->page->demoPT($item,$start);
        $data['news_list'] = $news_list;
        $this->load->view('page_pagination/page',$data);
    }
    public function index()
    {
        $news_list = $this->page->getList();
        $data['news_list'] = $news_list;
//        var_dump($news_list);
        $this->load->view('page_pagination/page',$data);
    }
}
