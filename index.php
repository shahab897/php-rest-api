<?php
// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}
$request_method = $_SERVER["REQUEST_METHOD"];
$request_uri = explode("/", $_SERVER["REQUEST_URI"]);
$resource = array_shift($request_uri);
switch ($request_method) {
    case 'GET':
        handleGet($resource, $request_uri);
        break;
    case 'POST':
        handlePost($resource, $request_uri);
        break;
    case 'PUT':
        handlePut($resource, $request_uri);
        break;
    case 'DELETE':
        handleDelete($resource, $request_uri);
        break;
    default:
        handleError();
        break;
}

function handleGet($resource, $request_uri)
{
    // handle GET request
    $data = ['status'=> true];
    return json_encode($data);
}

function handlePost($resource, $request_uri)
{
    // handle POST request

    $data = ['status'=> true]; 
    return json_encode($data);
}

function handlePut($resource, $request_uri)
{
    // handle PUT request
}

function handleDelete($resource, $request_uri)
{
    // handle DELETE request
}

function handleError()
{
    // handle error
}
