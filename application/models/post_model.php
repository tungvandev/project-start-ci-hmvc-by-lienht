<?php
/**
 * Created by PhpStorm.
 * User: HOANG LIEN
 * Date: 29/05/2018
 * Time: 11:13 SA
 */
class Post_model  extends CI_Model
{
    public function __construct(){
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
//    public function getList()
//    {
//        $query = $this->db->query("SELECT * FROM posts order by name");
//        return $query->result();
//    }
    public function getListCategoriesBySlugs($slugs)
    {
        return $this->db->select('*')->from('posts')->where('categories', $slugs)->get()->result_array();
    }
}
