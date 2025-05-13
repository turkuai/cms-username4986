<?php
    include 'db.php';

    header("content-type: application/json");

    $method = $_SERVER['REQUEST_METHOD'];
    $input = json_decode(file_get_contents('php://input'), true);

    switch ($method) {
        case 'GET';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $result = $conn->query("SELECT * FROM users WHERE id=$id");
                $data = $result->fetch_assoc();
                echo json_encode($data);
            } 
            else {
                $result = $conn->query("SELECT * FROM users"); {
                    $users[] = $row;
                }
                echo json_encode($users);
            }
            break;

        case 'POST':
            $name = $input['title'];
            $conn->query("INSERT INTO users (name) VALUES ('$name')");
            echo json_encode(["message" => "user added succefully"]);
            break;
        }


    $conn->close();
?>