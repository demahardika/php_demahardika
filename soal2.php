<?php
 switch ($_GET['page']) {
    case 0:
    echo "
        <form method='POST' action='soal2.php?page=1'>
			Nama : <input type='text' name='nama'>
			<input type='submit' value='Submit'>
		</form>
		";
        break;
    case 1:
    	$nama = $_POST['nama'];
    	echo "$nama";
       echo "
        <form method='POST' action='soal2.php?page=2'>
			<input type='hidden' name='nama' value='";echo "$nama"; echo"'>
			Umur : <input type='text' name='umur'>
			<input type='submit' value='Submit'>
		</form>
		";
        break;
    case 2:
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
    	echo "$umur";
    	echo "$nama";
       echo "
        <form method='POST' action='soal2.php?page=3'>
        	<input type='hidden' name='nama' value='";echo "$nama"; echo"'>
        	<input type='hidden' name='umur' value='";echo "$umur"; echo"'>
			Hobi : <input type='text' name='hobi'>
			<input type='submit' value='Submit'>
		</form>
		";
        break;
    case 3 :
    	$nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $hobi = $_POST['hobi'];
        ?><table>
        	<tr>
        		<td>Nama</td>
        		<td> <?php echo "$nama"; ?></td>
        	</tr>
        	<tr>
        		<td>Umur</td>
        		<td><?php echo "$umur"; ?></td>
        	</tr>
        	<tr>
        		<td>Hobi</td>
        		<td><?php echo "$hobi"; ?></td>
        	</tr>
        </table>
        <?php
}
?>