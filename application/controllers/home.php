<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model('message_model');
    }
    
    
    public function index(){
        
       
        $this->load->view('login/home_view');
         // If the user is validated, then this function will run
        echo 'Congratulations, you are logged in.';
        // Add a link to logout
        echo "<br /><a href='".base_url()."home/do_logout'>Logout </a>";
    }
    
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
    
    public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

    public function view_messages(){
        $this->load->view('message_view');
    }
    public function post_message(){
        
     
        $this->message_model->add_message();
        $this->view_messages();
        
    }
}
?>
