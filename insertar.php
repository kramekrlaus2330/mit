<?php

 

DEFINE ('DBUSER', 'root');

DEFINE ('DBPW', '');

DEFINE ('DBHOST', 'localhost');

DEFINE ('DBNAME', 'libreciacdb');

 

$dbc = mysqli_connect(DBHOST,DBUSER,DBPW);

if (!$dbc) {

    die("Database connection failed: " . mysqli_error($dbc));

    exit();

}

 

$dbs = mysqli_select_db($dbc, DBNAME);

if (!$dbs) {

    die("Database selection failed: " . mysqli_error($dbc));

    exit();

}

 

$userid = mysqli_real_escape_string($dbc, $_GET['userid']);

$username = mysqli_real_escape_string($dbc,$_GET['username']);

$password = mysqli_real_escape_string($dbc,$_GET['contra']);

$email = mysqli_real_escape_string($dbc,$_GET['email']);

$name = mysqli_real_escape_string($dbc,$_GET['name']);

$Codigo = mysqli_real_escape_string($dbc,$_GET['Codigo']);

$telefono = mysqli_real_escape_string($dbc,$_GET['telefono']);

 

$query = "INSERT INTO users (userid, username, contra, email, name,
 Codigo, telefono) VALUES ('$userid', '$username', 
 '$password', '$email', '$name', '$Codigo', '$telefono')";

$result = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc));
 
mysqli_close($dbc);

 
?>
