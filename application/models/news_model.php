<?php
/**
 * Created by PhpStorm.
 * User: HOANG LIEN
 * Date: 28/05/2018
 * Time: 9:31 CH
 */
class News_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getList()
    {
        //        $this->db->select('*');
        //        $query = $this->db->get('categories');
        $query = $this->db->query("SELECT DISTINCT  name FROM categories order by name");
        return $query->result();
    }
    public function getListCategories()
    {
        //        $this->db->select('*');
        //        $query = $this->db->get('categories');
        $query = $this->db->query("SELECT * FROM categories order by name");
        return $query->result();
    }

}
