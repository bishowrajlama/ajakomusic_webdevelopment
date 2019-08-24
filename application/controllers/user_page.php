<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_page extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('site_settings_model', 'settings');
        $this->load->model('package_model','package');
        $this->load->model('crud_model','crud');
    }

    // public $per_page;
    // public  $table = "igc_package_category";
    // public $field_name = "category_url";
    // //public  $redirect = "product";



    public function user(){

            $this->load->view('header');
            $this->load->view('user_page');
            $this->load->view('footer');

}
}