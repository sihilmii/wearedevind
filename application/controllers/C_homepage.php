<?php
/**
*
*/
class C_homepage extends CI_Controller {
  public function __construct() //konstraktor untuk meload library, helper dan model
  {
    parent::__construct();
  }

  public function index(){
    // $this->load->library('googlemaps');
    //
    // $config = array();
    // $config['center'] = 'indonesia';
    // $config['zoom'] = '5';
    // $this->googlemaps->initialize($config);
    //
    // $marker = array();
    // $marker['position'] = 'malang';
    // $marker['infowindow_content'] = 'Kota Malang';
    // $this->googlemaps->add_marker($marker);
    //
    // $data['map'] = $this->googlemaps->create_map();
    //
    // $this->load->view('v_gmap', $data);
    $this->load->view('index.php');
  }
}
