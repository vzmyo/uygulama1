<form action="derssecimi.php" method="POST">
<table border="1" align="center">
<th colspan="2">DERS SECÝMÝ</th>
<tr>
	<td colspan="2">
		Ogr. No:
		<?php
		echo"<select name='no'>";
			$dosya=fopen("bilgi.txt","r");
			while (!feof($dosya))
			{
				$kaynak=fgets($dosya,256);
				$kaynak=trim($kaynak);
				$dizi=explode("-",$kaynak);
				echo "<option>".$dizi[0];
			}
		echo"</select>";
		?>
	</td>
</tr>
<tr>
	<td>Dere Seciniz:</td>
	<td>
		Matematik<input type="radio" name="secim" value="Matematik"><br>
		Turkce<input type="radio" name="secim" value="Turkce"><br>
		Fen Bilgisi<input type="radio" name="secim" value="Fen Bilgisi">
	</td>
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
	if (!file_exists("ders.txt"))
	{
		fopen("ders.txt","w");	
	}
	if ($_POST["kaydet"])
	{
		if(!$_POST["secim"])
		{
			echo"********EKSIK BILGI GIRIS*********";
		}
		else
		{
			$dosya=fopen("ders.txt","a");
			if($_POST["secim"]=="Matematik")
			{
				$kredi="2";
			}
			elseif ($_POST["secim"]=="Turkce")
			{
				$kredi="3";
			}
			else
			{
				$kredi="4";
			}
			$yazilacak=$_POST["no"]."-".$_POST["secim"]."-".$kredi."\n";
			fputs($dosya,$yazilacak);
		}
	}
?>