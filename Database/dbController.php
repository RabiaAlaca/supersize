<?php


// Database Connection Properties
 define('host', 'localhost');
 define ('user', 'root');
 define('password', '');
 define('database', 'shopee');

//call constructor
try {


    $con = new PDO("mysqli:host=" . host . "; name=" . database, user, password);
    $result = mysqli_query(con, "SELECT * FROM shopee");
}
catch
(PDOException $e){
    echo $e->getMessage();
}
$data = array();
if (mysqli_num_rows(result) > 0)
{
    while ($row = mysqli_fetch_assoc(result))
    {
        $data[] = row;
    }

    echo json_encode(data);
}


