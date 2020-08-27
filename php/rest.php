<?php
// Allow every Webpage to use the service
header("Access-Control-Allow-Origin: *");
// Defines the responding Content-Type
header("Content-Type: application/json; charset=UTF-8");
// Defines the supported Methods
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");


// Save the requested method in a variable (GET, POST, PUT, DELETE, ...)
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PHP_SELF'], '/'));

// saves the value of the first part [e.g.: book] of the path in the variable $product_type if the first part of the path is set and not empty
$product_type = isset($request[0]) && !empty($request[0]) ? $request[0] : NULL;
// saves the value of the second part [e.g.: 1] of the path in the variable $product_type if the second part of the path is set and not empty
$product_id = isset($request[1]) && !empty($request[1]) ? $request[1] : NULL;

if(isset($_GET['id']))
{
    $product_id=$_GET['id'];
}
else
{
    $product_id=NULL;
}
// save the body of the request in der variable $payload
$payload = file_get_contents('php://input');



// save all files (and not the directories) in the $files array
$files = array_filter(scandir('products/'), function ($item) {
    return !is_dir('products/' . $item);
});

// payload
$payload_object = json_decode($payload);


// Validate JSON
if ($payload_object === NULL && !empty($payload))
{
    echo "Unprocessable Entity </br>";
    echo $payload;
    http_response_code(422);
    die();
}

switch ($method) {
    case 'GET':
        // if no id specified show all Products
        if ($product_id === NULL) {
            // echo the Hyperlink to all Products
            foreach ($files as $file) {
                echo("<a href='products/$file'>$file</a><br>");
            }
            http_response_code(200);
        } else {
            // return the info for a specific Product by id
            echo(file_get_contents('products/' . $product_id));
            http_response_code(200);
        }
        break;
    case 'POST':

        $content=trim($payload);
        $decoded=json_decode($content, true);

        foreach ($files as $file)
        {
            if($file===$product_id)
            {
                http_response_code(409);
                exit();
            }
            $product_id=$file+1;

        }

        $itemTitle=$decoded["itemTitle"];
        $itemPrice=$decoded["itemPrice"];
        $itemNumber=$decoded["itemNumber"];


        $data=array(
            "itemTitle"=>$itemTitle,
            "itemPrice"=>$itemPrice,
            "itemNumber"=>$itemNumber
        );
        header('Content-Type: application/json');
        $fp = fopen('products/'.$product_id, 'w');
        fwrite($fp, json_encode($data));
        fclose($fp);

        break;
    case 'PUT':

        foreach ($files as $file)
        {
            if($file===$product_id)
            {
                $filename='products/'.$product_id;
                $fp = fopen($filename, 'r');
                $jsonContent=fread($fp, filesize($filename));
                fclose($fp);
                $decodedJsonContent=json_decode($jsonContent, true);

                $itemTitle=$decodedJsonContent["itemTitle"];
                $itemPrice=$decodedJsonContent["itemPrice"];
                $itemNumber=$decodedJsonContent["itemNumber"];

                $content=trim($payload);
                $decoded=json_decode($content, true); //

                if(isset($decoded["itemTitle"]))
                {
                    $itemTitle=$decoded["itemTitle"];
                }
                if(isset($decoded["itemPrice"]))
                {
                    $bookPrice=$decoded["itemPrice"];
                }
                if(isset($decoded["itemNumber"]))
                {
                    $itemNumber=$decoded["itemNumber"];
                }

                $data=array(
                    "itemTitle"=>$itemTitle,
                    "itemPrice"=>$itemPrice,
                    "itemNumber"=>itemNumber
                );
                header('Content-Type: application/json');
                $fp = fopen('products/'.$product_id, 'w');
                fwrite($fp, json_encode($data));
                fclose($fp);

                http_response_code(200);
                exit();
            }
            else
            {
                http_response_code(404);

            }
        }
        break;
    case 'DELETE':
        foreach ($files as $file)
        {
            if($file===$product_id)
            {
                $filename='products/'.$product_id;
                unlink($filename);
                http_response_code(200);

                exit();
            }
            else
            {
                http_response_code(404);

            }
        }
        break;
    default :
        // Method not implemented
        http_response_code(501);
}
?>