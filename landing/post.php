<?php

$name = htmlentities($_POST['name']) ?? '';
$phone = htmlentities($_POST['phone']) ?? '';
$email = htmlentities($_POST['email']) ?? '';
echo "name: $name <br>  phone: $phone <br> email: $email <br>";