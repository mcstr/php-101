<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <h1>Test with DB</h1>




    <?php

    $username = 'root';
    $password = 'mypassword';
    $database = 'test';

    $conn = new mysqli('localhost', $username, $password, $database);


    //check connection

    if ($conn -> connect_error) {
        // echo '<pre>', print_r($conn), '</pre>';
        die('Connection failed' . "<br> " . $conn->connect_error);
    }
    echo "<br>";
    echo "<br>";
    echo "Connected successfully";
    echo "<br>";
    echo "<br>";
    
// instert a new user

    // $query = "INSERT INTO users (first_name, last_name, age, email)
    // VALUES ('Markus', 'Laukötter', 32, 'markus@email.com')";


    // if($conn->query($query) === TRUE) {
    //     echo "Record created successfully";
    // } else {
    //     echo "Error" . $query . "<br>" . $conn->error;
    // }

// get some value from the database

    $query1 = "SELECT * FROM users WHERE age < 30";
    $result = $conn -> query($query1);




  
    echo "<br>";
    echo "<br>";
    echo "<pre>" .print_r($result) . "</pre>";

    echo "<br>";
    echo "<br>";

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
					var_dump($row);
					echo "<br>";
					echo "<br>";
          echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. " " . $row["age"]. " " . $row["email"] ."<br>";
					echo "<br>";
        	echo "<br>";
        }
      } else {
        echo "0 results";
      }


    $conn->close();

    ?>
</head>
<body>
    
</body>
</html>