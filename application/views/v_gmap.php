<html>
<head>
  <title>SIGAB-APPS</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/datatables/media/css/jquery.dataTables.min.css">
  <script type= 'text/javascript' src="<?php echo base_url();?>assets/datatables/media/js/jquery.js"></script>
  <script type= 'text/javascript' src="<?php echo base_url();?>assets/datatables/media/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
  <style type="text/css">
  body {
    font-family: 'Raleway', sans-serif;
  }
  </style>
  <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>
  <?php echo $map['js']; ?>
</head>
<body>
  <div class="container">
    <br>
    <?php echo $map['html']; ?>
    <br>
    <legend><h2>Detail Bencana</h2></legend>
    <!-- <h2>Identifikasi</h2>
    <hr> -->
    <?php
    $formData = array(
        'class' => 'form-horizontal',
    );
    echo form_open_multipart('C_maps', $formData);
    ?>
      <div class="form-group">
        <label class="control-label col-sm-3" for="nama">Nama Bencana</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="nama">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="lokasi">Lokasi</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="lokasi">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="keterangan">Keterangan</label>
        <div class="col-sm-7">
          <textarea rows="4" class="form-control" id="keterangan"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="kebutuhan">Kebutuhan</label>
        <div class="col-sm-7">
          <textarea rows="4" class="form-control" id="kebutuhan"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="gambar">Gambar</label>
        <div class="col-sm-7">
          <input type="file" class="form-control" id="gambar">
        </div>
      </div>
      <div class="col-sm-offset-3 col-sm-7">
          <input class="btn btn-success" type="submit" value="Tambah">
          <input class="btn btn-danger" type="reset" value="Reset">
      </div>
      <input type="date" id="tanggal" value="<?php echo gmdate("Y-m-d", time() + 60 * 60 * 7); ?>">
      <input type="text" id="status" value="0">
      <input type="text" id="no_pers" value="">
      <input type="text" id="long" value="">
      <input type="text" id="lat" value="">
    </form>
  </div>
  <script type= 'text/javascript' src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGK9QvOYo5TqS8Iqlvj5nro5G6ljhL6-4&callback=initMap" async defer></script>
</body>
</html>
