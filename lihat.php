<?php
	echo "<head><title>My Guest Book</title></head>";
	$fp = fopen("guestbook.txt","r");
	echo "<table border=0>";

	while ($isi = fgets($fp,80))
	{
		$pisah = explode("|", $isi);
		echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
		echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";
		echo "<tr><td>Handphone </td><td>: $pisah[2] </td></tr><tr><td>%nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}