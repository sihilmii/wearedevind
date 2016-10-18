<?php
/**
*
*/
class M_gmap extends CI_Model
{
  function _construct()
    {
        parent:: _construct();
    }
    //fungsi untuk menampilkan semua data
 function tampilan_semua_data()
 {
  //mengambil nilai atau data dari database
        return $this->db->get('lokasi');
 }

 function simpan_data($simpanlokasi) //fungsi simpan data
 {
  //memasukkan ke database
  return $this->db->insert('lokasi', $simpanlokasi);
 }
}

?>
