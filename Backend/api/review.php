<?php
require_once("../Repositories/ReviewRepo.php");
require_once("../Models/DiskRating.php");

header("Content-Type:application/json");

function create_error_object(string $err_message): array
{
    $err_array = array();
    $err_array["error"] = $err_message;
    return $err_array;
};

function response(int $statusCode, array $data)
{
    http_response_code($statusCode);
    echo json_encode($data);
    return;
};

if($_SERVER["REQUEST_METHOD"] !== "POST")
{
    response(400, create_error_object("Only post method can be used at this endpoint"));
    return;
};

// //get the request data
$data = json_decode(file_get_contents("php://input"), true);


if(array_key_exists("diskName", $data) == false || array_key_exists("releasedOn", $data) == false || array_key_exists("username", $data) == false || array_key_exists("reviewText", $data) == false || array_key_exists("review", $data) == false)
{
    response(400, create_error_object("Please provide all fields"));
    return; 
}
//validate the data
$rating = new DiskRating($data["diskName"], $data["username"], intval($data["review"]), $data["reviewText"], $data["releasedOn"]);

$error_msg = $rating->validateData();
if(strlen($error_msg) > 0)
{   
    response(400, create_error_object($error_msg));
    return;
}
//save review to database
$repo = new ReviewRepo($conn);
$success = $repo->CreateReview($rating);
if(!$success)
{
    response(500, create_error_object("Could not save review to database"));
    return;
}else {
    response(201, array());
    return;
}