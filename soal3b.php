<?php
include "soal3a.php" ;

 switch ($_GET['page']) {
    case 0:
    ?>
    <form method='POST' action='soal3b.php?page=1'>
      Nama <input type='text' name='nama'>
      Alamat <input type='text' name='alamat'>
      <input type='submit'> 
   </form>
    <?php
    break;

    case 1:
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    echo "$nama";
    echo "$alamat";
    $query = mysqli_query($kon, 'SELECT person.nama , person.alamat , hobi.hobi FROM person, hobi WHERE person.nama ="$nama" OR person.alamat="$alamat"');
   while ($data = mysqli_fetch_array($query)) 
   {
     echo $data['nama'];
     echo $data['alamat'];
     echo $data['hobi'];
     echo "<br />";
   }
    break;
   }

?>