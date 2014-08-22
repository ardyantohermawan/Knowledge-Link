<html>
<head>
<title>Website Pertemanan - Lokomedia</title>
<link href="<?php echo base_url();?>/assets/dinding.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.livequery.js" ></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript" src="js/jquery.oembed.js"></script>
<script type="text/javascript" src="js/wall.js"></script>
<script type="text/javascript" src="js/suggest.js"></script>
<style type="text/css">
body {
	background-image: url(images/NewPicture.jpg);
	background-repeat: repeat-x;
}
.style1 { font-weight: bold }
</style>
</head>
<body>
<div class="main">
  
  <div class="left">
    <div class="propic">
  
	  </div>
    <div class="link style1">
      <p align="right"><a href="profile_photo.php" style="text-decoration:none; color:#2ba314">Edit Profile Pic</a></p>
	  </div>
  </div>

<div class="right">
<div class="list"></div>

<div id="wall_container">
<div id="updateboxarea">
<h4>Tulis Statusmu ..! &nbsp; &nbsp; &nbsp; <a href="#" id="klikfoto"><img src="images/foto.png" /></a></h4>
<textarea cols="30" rows="4" name="update" id="update"></textarea>
<input type="hidden" name="id_dinding" id="id_dinding" value="" />
<div id="showthumb"></div>
<input type="submit"  value=" Update "  id="update_button"  class="update_button"/>
<form method="post" action="uploadgambar.php" enctype="multipart/form-data" id="frmUpload">
<div style="display:none" id="bukafoto" class="bukafoto">
<b>Silahkan Upload Foto Anda dengan Max ukuran foto 1 MB</b> <br />
<input type="file" name="photoimg" id="photoimg" />
<input type="hidden" name="id_dinding2" value="" />
</div>
</form>
</div>

<div id='flashmessage'>
  <div id="flash" align="left"></div>
</div>
<div id="content">
  <?php ?>
</div>
</div>
</body>
</html>
