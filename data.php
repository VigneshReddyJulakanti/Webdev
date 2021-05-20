header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization, Accept,charset,boundary,Content-Length');
header('Access-Control-Allow-Origin: *');

 <?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("sql6.freemysqlhosting.net", "sql6413562", "TkKdJbjaRE", "sql6413562");

$result = $conn->query("SELECT phoneNo1 FROM workersdetails");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"phoneNo1":"'  . $rs["phoneNo1"] . '",';
   //  $outp .= '"City":"'   . $rs["City"]        . '",';
   //  $outp .= '"Country":"'. $rs["Country"]     . '"}';
}
$outp .="]";

$conn->close();

echo($outp);
?>
