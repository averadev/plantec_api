<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

setlocale(LC_ALL,"es_ES@euro","es_ES","esp");


/**
 * The Saving coupon
 * Author: Alberto Vera Espitia
 * GeekBucket 2014
 *
 */
class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

	public function index(){
		
		if ($this->session->userdata('type') == 1) {
			$data['page'] = 'home';
			redirect('dashboard');
           // $this->load->view('partner/vwHome',$data);
        }else {
            redirect('login');
        }
    }
    
}