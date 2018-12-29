<?php
/**
 * Created by PhpStorm.
 * User: HOANG LIEN
 * Date: 28/05/2018
 * Time: 10:26 CH
 */
//khong cho truy cap thang vao day, phai qua index o ngoai
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categories extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('news_model');
    }

    public function demo(){
        // Data cần truyền qua view
        $data = array(
            'title' => 'Đây là trang login',
            'message' => 'Nhập Thông Tin Đăng Nhập'
        );

        // Load view và truyền data qua view

        $this->load->view('categories/demo',$data);
    }
    public function news_list(){
        // Gọi function trong model
        $news_list = $this->news_model->getList();
        $data['news_list'] = $news_list;
        //var_dump($news_list);
        $this->load->view('categories/new_list',$data);
    }

}