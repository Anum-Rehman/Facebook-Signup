<?php
    $name = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['id'];
    $password = $_POST['new-pass'];
    $DOBd = $_POST['date'];
    $DOBm = $_POST['month'];
    $DOBy = $_POST['year'];

    echo "Full Name: ";
    echo $name;
    echo " ";
    echo ($lname)."<br>";
    echo "Email Address: ";
    echo ($email)."<br>";
    echo "Password: ";
    echo ($password)."<br>";
    echo "Date of Birth: ";
    echo $DOBd;
    echo " ";
    echo $DOBm;
    echo " ";
    echo $DOBy;
?>