<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->check_isvalidated();
    }
    
    
    public function index(){

        
       
        $this->load->view('login/home_view');
         // If the user is validated, then this function will run
        echo 'Congratulations, you are logged in.';
        // Add a link to logout
        echo "<br /><a href='".base_url()."home/do_logout'>Logout Fool!</a>";
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
}
?>
