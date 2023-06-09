<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);

/*
$header = "HTTP/1.1 400 Bad Request"; // Sending malformed data results in a 400 Bad Request response.
$header = "HTTP/1.1 401 Unauthorized"; // Trying to access to the API without authentication results in a 401 Unauthorized response.
$header = "HTTP/1.1 404 Not Found"; // Not Found
$header = "HTTP/1.1 405 Method Not Allowed"; // Trying to use a method on a route for which it is not implemented results in a 405 Method Not Allowed
$header = "HTTP/1.1 422 Unprocessable Entity"; // Sending invalid data results in a 422 Unprocessable Entity response

$header = "HTTP/1.1 200 OK"; // Getting a resource or a collection resources results in a 200 OK response.
$header = "HTTP/1.1 201 Created"; // Creating a resource results in a 201 Created response.
$header = "HTTP/1.1 204 No Content"; // Updating or deleting a resource results in a 204 No Content response.
*/

header('Content-Type: application/json; charset=utf-8');

if (isset($data["password"]) && $data["password"] === "Qwerty123") {
    $sql = "SELECT * FROM cars WHERE 1=1 ";
    $bind = [];

    if (!empty($data["nameSearch"])) {
        $sql .= " AND (carBrand LIKE CONCAT('%', :carBrand, '%') OR carModel LIKE CONCAT('%', :carBrand, '%') OR carPrice LIKE CONCAT('%', :carBrand, '%')) ";
        $bind[":carBrand"] = $data["nameSearch"];
    }
    $sql .= "ORDER BY carBrand";

    $cars = $db->sql($sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($cars);

} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Your password was wrong";
    echo json_encode($error);
}
?>
