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
          $this->db->select("tagID,species,unit,season,tags,price,listingAgent,location");
          $this->db->from('tags');
          $query = $this->db->get();
          return $query->result();
     }

      public function add_prop()
     {
        $species=$this->input->post('species');
        $unit=$this->input->post('unit');
        $season=$this->input->post('season');
        $tags=$this->input->post('tags');
        $price=$this->input->post('price');
        $location=$this->input->post('location');
        $listingAgent=$this->input->post('listingAgent');
        $data = array(
        'species'=>$species,
        'unit'=>$unit,
        'season'=>$season,
        'tags'=>$tags,
        'price'=>$price,
        'location'=>$location,
        'listingAgent'=>$listingAgent
        );

        $this->db->insert('tags',$data);
        $this->db->set('tags');   
     }
}
?>