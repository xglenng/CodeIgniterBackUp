<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Garrett Glenn
* Description: Tags model class
*/
class Tags_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
         
     public function getTags()
     {
          $this->db->select("tagID,species,unit,season,tags,price");
          $this->db->from('tags');
          $query = $this->db->get();
          return $query->result();
     }
}
?>