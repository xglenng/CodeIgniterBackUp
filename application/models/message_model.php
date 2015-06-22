<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Garrett Glenn
* Description: Message model class
*/
class Message_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
     
     public function add_message()
     {
        $Name=$this->input->post('name');
        $Message=$this->input->post('message');
        $data = array(
        'Name'=>$Name,
        'Message'=>$Message
        );

        $this->db->insert('messages',$data);
        $this->db->set('messages');   
     }
}
?>