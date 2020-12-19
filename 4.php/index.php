<?php
session_start();
include 'koneksi.php';
if (!$_SESSION['no']) {
  header('location: login.php');
}
$nouser = $_SESSION['no'];
$data = mysql_fetch_array(mysql_query("SELECT * FROM `tb_user` WHERE `no_user`='" . $_SESSION['no'] . "'"));
if (isset($_POST['kirim'])) {
  $status = $_POST['status'];
  $tanggal = date('Y-m-d H:i:s');
  mysqli_query("INSERT INTO `tb_timeline`(`no_user`, `status`, `tanggal`) VALUES ('$nouser','$status','$tanggal')");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 

  <title>Beranda <?php echo $data['nama']; ?> - Pemula Belajar</title>
  <link rel="stylesheet" type="text/css" href="styles.css"/>
</head>
<body>
  <div class="header">
    Mediasosialku.com
  </div>
  <div class="navigasi">
    <li><a href="index.php">Home</a></li>
    <li><a href="profile.php?id=<?php echo $_SESSION['no']; ?>">Profile</a></li>
    <li><a href="keluar.php">Keluar</a></li>
  </div>
  <div class="sidebar">
    <p>Profile Saya</p>
    <img src="profile.png" width="60px" height="60px" style="float: left; margin-right: 10px;" />
    <p><?php
    echo '<a href="profile.php?id=' . $_SESSION['no'] . '">' . $data['nama'] . '</a>';
    ?></p>
    <p><?php
    echo $data['tentang'];
    ?></p>
  </div>
  <div class="content">
    <p>Buat Status</p>
    <form method="post">
      <textarea name="status" placeholder="Apa yang anda pikirkan ?" rows="3" cols="50" maxlength="140"></textarea>
      <br/>
      <button type="submit" name="kirim">Post</button> <span style="color: #555; font-size: 12px">Maximal 140 huruf</span>
    </form>
    <br/>
    <hr />
    <p>Dinding Status</p>
    <?php
    $querystatus = mysqli_query("SELECT `tb_timeline`.*,`tb_user`.`no_user`,`tb_user`.`nama` FROM tb_timeline
    LEFT JOIN `tb_user` ON `tb_timeline`.`no_user` = `tb_user`.`no_user` ORDER BY `tb_timeline`.`id_timeline` DESC");
    while ($data = mysql_fetch_array($querystatus)) {
      echo '<div style="border: 1px solid #555; margin-bottom: 10px; padding: 10px">';
      echo '<img src="profile.png" width="40px" height="40px" style="float: left; margin-right: 10px;" />';
      echo '<a href="profile.php?id=' . $data['no_user'] . '" style="margin-right: 20px">' . $data['nama'] . '</a>' . $data['status'];
      echo '<br /><span style="color: #555; font-size: 12px"><i>' . $data['tanggal'] . '</i></span>';
      echo '<div style="clear: both; margin-bottom: 10px"></div></div>';
    }
    if (mysql_num_rows($querystatus) == 0) {
      echo "Tidak ada status tersimpan!";
    }
    ?>
  </div>
</body>
</html>
