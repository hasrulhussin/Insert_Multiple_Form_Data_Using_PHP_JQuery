<?php

//insert.php

$conn = new PDO("mysql:host=localhost; dbname=jquery_crud", "root", "");

$query = "
INSERT INTO tbl_sample
(first_name, last_name)
VALUES (:first_name, :last_name)
";

for($count = 0; $count < count($_POST["hidden_first_name"]); $count++){

    $data = array(
        ':first_name' => $_POST['hidden_first_name'][$count],
        ':last_name' => $_POST['hidden_last_name'][$count]
    );
    $statement = $conn->prepare($query);
    $statement->execute($data);
}


?>
