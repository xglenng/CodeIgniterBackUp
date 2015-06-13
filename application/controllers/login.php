<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    public function index($msg = NULL){
        // Load our view to be displayed
        // to the user
        $data['msg'] = $msg;
        $this->load->view('login_view', $data);
    }
    
    public function process(){
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
            // If user did validate,
            // Send them to members area
            redirect('home');
        }        
    }

     public function registration()
     {

      $this->load->model('login_model');
      $this->login_model->add_user();

       $this->load->view('login/home_view');
         // If the user is validated, then this function will run
        echo 'Congratulations, you are logged in.';
        // Add a link to logout
        echo "<br /><a href='".base_url()."home/do_logout'>Logout Fool!</a>";
     }
}
?>