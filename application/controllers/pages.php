<?php
/**
 * Created by PhpStorm.
 * User: HOANG LIEN
 * Date: 28/05/2018
 * Time: 10:47 SA
 */
class pages extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('post_model');
        $this->load->model('page');
        $this->load->model('news_model');
        $this->load->helper('url');
    }
    public function view($page = 1)
    {
        // cau hinh trang
        $this->load->library('pagination');
        //
        $config['base_url'] = base_url();
        //so bai tren 1 trang
        $config['per_page'] = 6;
        $config['use_page_numbers'] = TRUE;
        //goi den helper pagination
        $this->pagination->initialize($config);
        $data['list_pagination'] = $this->pagination->create_links();

        //lay ra so ban ghi
        $config['total_rows'] = $this->page->soBanGhi();

        //
        $data['news_list'] = $this->news_model->getList();
//        $data['news_list'] = $this->news_model->getListCategories();
//        $this->page->soBanGhi();

        $controller= $this->uri->segment(1); // controller
        $action = $this->uri->segment(2); // action
        $url = $controller . '/' . $action;

//        $data['post_list'] = $this->post_model->getListCategoriesBySlugs($action);

        $data['post_list'] = $this->post_model->getList($config['per_page'],$config['per_page'] * ($page -1));
        $this->load->view('post/post', $data);
    }


}