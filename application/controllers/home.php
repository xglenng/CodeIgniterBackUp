<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model('message_model');
        $this->load->model('tags_model');
    }
    
    
    public function index(){        
       
        
    
        $this->data['posts'] = $this->tags_model->getTags(); // calling Post model method getPosts()
        $this->load->view('login/home_view', $this->data);

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

    public function view_prop(){
        $this->load->view('list_property_view');
    }

    public function add_property(){
        $this->load->view('home_view');
    }

    public function sheep_news(){
        $this->load->view('Rocky_Mountain_Sheep_View');
    }

    public function Elk_news(){
        $this->load->view('Rocky_Mountain_Elk_View');
    }

    public function view_news(){
        $this->load->view('news_view');
    }
    public function post_message(){             
        $this->message_model->add_message();
        $this->view_messages();
        
    }

    public function post_property(){             
        $this->tags_model->add_prop();
        $this->add_property();
    }
    public function get_tags(){
            
        $this->data['posts'] = $this->tags_model->getTags(); 
        
        
    }
}
?>
