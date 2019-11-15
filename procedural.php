<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check Connection
if (!$conn){
	die("Connection Gaggal : " . mysqli_connect_error());
}
$sql = "SELECT kode, negara, champion FROM liga";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
	//output data dari setiap row
	while($row =  mysqli_fetch_assoc($result)){
		echo " Liga ".$row["negara"];
		echo " Mempunyai ".$row["champion"];
		echo " Wakil di Liga Champion<br>";
	}
}else{
	echo "0 results";
}
mysqli_close($conn);
?>
