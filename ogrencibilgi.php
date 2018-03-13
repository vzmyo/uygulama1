<form action="ogrencibilgi.php" method="POST">
<table border="1" align="center">
<th colspan="2">OGRENCI BILGI</th>
<tr>
	<td>Ogr. No:</td>
	<td><input type="text" name="no"></td>
</tr>
<tr>
	<td>Adi:</td>
	<td><input type="text" name="adi"></td>
</tr>
<tr>
	<td>Soyadi:</td>
	<td><input type="text" name="soyadi"></td>
</tr>
<tr>
	<td colspan="2" align="center">
		<input type="submit" name="kaydet" value="Kaydet">
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
		<a href="index.php">anasayfaya don</a>
	</td>
</tr>
</table>
</form>
<?php
	if(!file_exists("bilgi.txt"))
	{
		fopen("bilgi.txt","w");
	}
	if($_POST["kaydet"])
	{
		if($_POST["no"]=="" || $_POST["adi"]=="" || $_POST["soyadi"]=="")
		{
			echo"********EKSIK BILGI GIRIS*********";
		}
		else
		{
			$dosya=fopen("bilgi.txt","a");
			$yazilacak=$_POST["no"]."-".$_POST["adi"]."-".$_POST["soyadi"]."\n";
			fputs($dosya,$yazilacak);
		}
	}
?>