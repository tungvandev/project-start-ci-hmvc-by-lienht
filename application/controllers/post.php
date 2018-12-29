<?php
/**
 * Created by PhpStorm.
 * User: HOANG LIEN
 * Date: 29/05/2018
 * Time: 11:12 SA
 */
class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('post_model');
    }
    public function listPost()
    {
        // Gọi function trong model
        $post_list = $this->post_model->getList();
        $data1['post_list'] = $post_list;
        //var_dump($news_list);
        $this->load->view('post/post', $data1);
    }


}