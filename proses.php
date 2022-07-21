<?php
	echo "<head><title>My Guest Book</head></title>";
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no = $_POST['no'];

	$fp = fopen("guestbook.txt","a+");
	fputs($fp, "$nama | $alamat | $no ");
	fclose($fp);

	echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
	echo "<a href=tampilan.html> Isi Pesanan </a><br>";
	echo "<a href=lihat.php> Lihat Detail Pesanan </a><br>";