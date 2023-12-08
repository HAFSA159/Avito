<?php
require "connection.php";
    // This checks if the form was submitted using the HTTP POST method.
if  ($_SERVER["REQUEST_METHOD"] == "POST"){

    // submitted through the POST method from the form fields and assigns them to variables.
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $category = $_POST['category'];

    // It constructs an SQL query for inserting data into the 'contact' table. 
    $sql = "INSERT INTO contact (firstName, lastName, email, password, catégorie) VALUES ('$firstname', '$lastname', '$email', '$pwd', '$category')";

    // It executes the SQL query using the mysqli_query function. 
    if (mysqli_query($conn, $sql)) {
        echo "Records added successfully.";
        header("location: index.php");  
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
    // It closes the MySQL database connection using the mysqli_close function. 
    mysqli_close($conn);
?>
