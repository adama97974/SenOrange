<?php 
 
// header("Content-Type: application/json; charset=UTF-8");
//$obj = json_decode($_GET["x"], false);

$conn = mysqli_connect("2a02:4780:bad:c0de::14", "id17364972_papidiop", "", "id17364972_senmoney");
$result = mysqli_query($conn, "SELECT * FROM compte ");
$tab=array();
while($row=mysqli_fetch_assoc($result))
{
$tab[] = $row;
}
//retourner la reponse en format json
echo json_encode($tab);
 ?>