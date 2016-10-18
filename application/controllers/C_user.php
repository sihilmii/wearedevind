<?php
/**
*
*/
class C_user extends CI_Controller {
  public function __construct() //konstraktor untuk meload library, helper dan model
  {
    parent::__construct();
  }

  public function index(){
    $this->load->library('googlemaps');

    $config = array();
    $config['center'] = 'indonesia';
    $config['zoom'] = '5';
    $this->googlemaps->initialize($config);

    $marker = array();
    $marker['position'] = 'malang';
    $marker['infowindow_content'] = 'Kota Malang';
    $marker['draggable'] = true;
    $marker['ondragend'] = 'alert(\'You just dropped me at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';

    $this->googlemaps->add_marker($marker);

    $data['map'] = $this->googlemaps->create_map();

    $this->load->view('mabes/index.php', $data);
  }
}
