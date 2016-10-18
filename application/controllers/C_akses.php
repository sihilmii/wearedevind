<?php
/**
*
*/
class C_akses extends CI_Controller {
  public function __construct() //konstraktor untuk meload library, helper dan model
  {
    parent::__construct();
  }

  public function index(){
    $this->load->view('akses/index.php');
  }
}
