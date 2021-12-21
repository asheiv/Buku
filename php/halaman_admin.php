
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/main-sidebar.css">

<div class="topnav" id="myTopnav">
    <button class="openbtn" onclick="openNav()"><img src="../icons/align-justify.svg" width="" height="30"></button> 
 
 
 <div class="dropdown">
 <?php 
	session_start();
 include 'koneksi.php';
	
	if($_SESSION['hak_akses']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
  <button class="dropbtn" onclick="myFunction()"><?php echo $_SESSION['username']; ?>
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="logout.php">Logout</a>

  </div>
  </div> 
  </a>
</div>


<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="halaman_admin.php?page=daftar_buku_admin">Daftar Buku</a>
  <a href="halaman_admin.php?page=input_buku">Input Buku</a>
  <a href="#">3</a>
  <a href="#">4</a>

</div>

<div id="main"><?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'daftar_buku_admin':
				include "daftar_buku_admin.php";
				break;
			case 'input_buku':
				include "input_buku.php";
				break;	
			default:
				include "daftar_buku_admin.php";
				break;
		}
	}
 
	 ?></div>


<script src="../js/sidebar-toggle.js"></script>

