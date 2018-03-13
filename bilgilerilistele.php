<table border="1" align="center">
<tr>
	<th colspan="5">BILGILERI LISTELE</th>
</tr>
<tr>
	<th>Ogr No</th>
	<th>Adi</th>
	<th>Soyadi</th>
	<th>Sectigi Ders</th>
	<th>Kredisi</th>
</tr>
<?php
	$dosya1=fopen("bilgi.txt","r");
	$dosya2=fopen("ders.txt","r");
	while (!feof($dosya1) && !feof($dosya2))
	{
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			echo "<tr ";
				if($dizi2[1]=="Matematik")
				{
					echo"bgcolor='pink'";
				}
				elseif ($dizi2[1]=="Turkce")
				{
					echo"bgcolor='blue'";
				}
				else 
				{
					echo"bgcolor='grey'";
				}
			echo">";
				echo"<td>".$dizi2[0]."</td>";
				echo"<td>".$dizi1[1]."</td>";
				echo"<td>".$dizi1[2]."</td>";
				echo"<td>".$dizi2[1]."</td>";
				echo"<td>".$dizi2[2]."</td>";
				
			echo "</tr>";
	}
?>
<tr>
	<td colspan="5" align="center">
		<a href="index.php">anasayfaya don</a>
	</td>
</tr>

</table>
}
   }
      





