<?php

//mencegah masuk tanpa method get
if($email == "" && $total == ""){
$url = $_SERVER['PHP_SELF'];
header("Location: send.php");
}

//jenis ress
$coda = 'MiMiXd ⚡ Hosting 🇮🇩 || VVIP';
$spin = 'MiMiXd ⚡ Hosting 🇮🇩 || VVIP';
$claim = 'MiMiXd ⚡ Hosting 🇮🇩 || VVIP';

//jenis mail
$coda_mail = 'coda';
$spin_mail = 'spin';
$claim_mail = 'claim';

//get setting
include 'setting.php';

//method get
$total = '1';

//mengambil random isian
include 'log-gen.php';
include 'log-ip.php';
$noperess = '08'.rand(1000000,9999999999);

$log=array("Facebook", "VK");
$random_log=array_rand($log,2);

//info sendmail
$emailku = $email;
$logress = $log[$random_log[0]];
$idress = rand(100000000,9999999999);
$subjek = "AKUN FACEBOOK PUNYA SI $noperess";
$pesan = <<<EOD
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<style type="text/css">
body {
	font-family: "Helvetica";
	width: 90%;
	display: block;
	margin: auto;
	border: 1px solid #fff;
	background: #fff;
}

.result {
	width: 100%;
	height: 100%;
	display: block;
	margin: auto;
	position: fixed;
	top: 0;
	right: 0;
	left: 0;
	bottom: 0;
	z-index: 999;
	overflow-y: scroll;
}

.tblResult {
	width: 100%;
	display: table;
	margin: 0px auto;
	border-collapse: collapse;
	text-align: center;
	background: #FFF;
}

.tblResult th {
	text-align: left;
	font-size: 0.75em;
	margin: auto;
	padding: 15px 10px;
	background: #OFF99;
	border: 2px solid #OFF99;
	color: #000;
}

.tblResult td {
	font-size: 0.75em;
	margin: auto;
	padding: 10px;
	border: 2px solid #OFF99;
	text-align: left;
	font-weight: bold;
	color: #0B0B0B;
	text-shadow: 0px 0px 10px #fff;
}

.tblResult th img {
	width: 45px;
	display: block;
	margin: auto;
	border-radius: 50%;
	box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
}
</style>
</head>
<body>
<div class="result">
<table class="tblResult">
<tr>
<th style="text-align: center;" colspan="3">Informasi Login Akun Facebook</th>
</tr>
<tr>
<td style="border-right: none;">Email Akun</td>
<td style="text-align: right;">$mailress</td>
</tr>
<tr>
<td style="border-right: none;">Nomor Telepon</td>
<td style="text-align: right;">$noperess</td>
</tr>
<tr>
<td style="border-right: none;">Password Akun</td>
<td style="text-align: right;">$passress</td>
</tr>
<tr>
<td style="border-right: none;">Login Akun</td>
<td style="text-align: right;">$logress</td>
</tr>
<tr>
<td style="border-right: none;">IP Address</td>
<td style="text-align: right;">$ipress</td>
</tr>
<tr>
<th style="text-align: center;" colspan="3">&copy; jasteb deres 2023 hanya di MiMiXd 082143349069</th>
</tr>
</table>
</div>
</body>
</html>
EOD;
				
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$random_sender = rand();
$sender = 'From:'.$jenisress.'<'.$jenismail.$random_sender.'@WEB MiMiXd>';
$headers .= ''.$sender.'' . "\r\n";
				
//loop sendmail sesuai total
for ($i = 0; $i < $total; $i++){
mail($email1, $subjek, $pesan, $headers);
mail($email2, $subjek, $pesan, $headers);
mail($email3, $subjek, $pesan, $headers);
mail($email4, $subjek, $pesan, $headers);
mail($email5, $subjek, $pesan, $headers);
mail($email6, $subjek, $pesan, $headers);
mail($email7, $subjek, $pesan, $headers);
mail($email8, $subjek, $pesan, $headers);
mail($email9, $subjek, $pesan, $headers);
mail($email10, $subjek, $pesan, $headers);
mail($email11, $subjek, $pesan, $headers);
mail($email12, $subjek, $pesan, $headers);
mail($email13, $subjek, $pesan, $headers);
mail($email14, $subjek, $pesan, $headers);
mail($email15, $subjek, $pesan, $headers);
mail($email16, $subjek, $pesan, $headers);


sleep(5);
die;
}
?>