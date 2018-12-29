<?php
/**
 * Created by PhpStorm.
 * User: HOANG LIEN
 * Date: 29/05/2018
 * Time: 2:40 CH
 */
class Page extends CI_Model {

//    public function countAll(){
//        return $this->db->count_all($this->_table);
//    }
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function soBanGhi()
    {
        $tong = $this->db->count_all_results('posts');
        return $tong;
    }
    public function demoPT($total,$start){
        return $this->db->select('*')->from('posts')->order_by('id ASC')->limit($total,$start)->get()->result_array();
    }

    public function getList($limit,$start_from){
        $query = $this->db->select('*')->from('posts')->limit($limit, $start_from)->get();
        return $query->result_array();
    }

}