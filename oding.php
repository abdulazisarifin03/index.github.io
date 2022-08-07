    <?php
if(isset($_POST['submit'])){
  echo '<h1>Hasil Input</h1>';
	echo '<ul>';
	echo '<li>Nama: ' . $_POST['nama'] . '</li>';
	echo '<li>html: ' . $_POST['html'] . '</li>';
	echo '<li>css: ' . $_POST['c++'] . '</li>';
	echo '<li>pesan: ' . $_POST['pesan'] . '</li>';
}
?>