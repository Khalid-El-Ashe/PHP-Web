<?php
// i need to make array to add error validations 
// $firstName = $_POST['firstName'];
// $lastName = $_POST['lastName'];
// $email = $_POST['email'];

$erros = [
    'firstName' => '',
    'lastName' => '',
    'email' => ''
];

if (isset($_POST['submit'])) {

    if (empty($firstName)) {
        $erros['firstName'] = 'first name is null';
    }

    if (empty($lastName)) {
        $erros['lastName'] = 'last name is null';
    }

    if (empty($email)) {
        $erros['email'] = 'email is null';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros['emeail']  = 'you must to add correct email address';
    }


    // if the error array is empty i need to insert data 
    if (!array_filter($erros)) {
        // i need to protect my database i need to save all data as String to don't make injection to my database 
        $firstName = mysqli_real_escape_string($connection, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($connection, $_POST['lastName']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);

        // i need to make insert query to add the data into database 
        $insert = "insert into users(firstName, lastName, email) values ('$firstName', '$lastName', '$email')";

        if (mysqli_query($connection, $insert)) {
            header('Location: '.$_SERVER['PHP_SELF']);
        } else {
            echo 'Error: ' . mysqli_errno($connection);
        }
    }
}
?>