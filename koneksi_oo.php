<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "latihan";

 //Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
//Check Connection
if ($conn->connect_error){
	die("Connection Gagal : ".$conn->connect_error);
}

$sql = "SELECT kode, negara, champion FROM liga";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	//output data dari setiap row
	while($row = $result->fetch_assoc()){
		echo "Liga".$row["negara"];
		echo "Mempunyai".$row["champion"];
		echo "Wakil Di Liga Cahmpion<br>";
	}
}else{
	echo "0 results";
}
$conn->close();
?>