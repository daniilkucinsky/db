
<?php
$host = "localhost";
$user = "php_app";
$password = "1234";
$database = "sql_store";



$conn = new mysqli ($host , $user , $password , $database);
if($conn ->connect_error){
    die("Connection failed:  " . $conn->connect_error);
}
echo "connection succesful";
$sql = "SELECT customer_id , first_name , last_name FROM customers";
$result = $conn ->query($sql);
var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Customers</h1>
    <?php
    echo "<ul>";
    if ($result -> num_rows > 0 ){
        while($row = $result->fetch_assoc()){
            // var_dump($row);
            echo "<li>Customer ID: " . $row["customer_id"] . "</li>";
        }
        echo"</ul>";
    }else{
        echo "No customers found";
    }
    ?>
</body>
</html>