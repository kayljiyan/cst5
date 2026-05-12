<?php
session_start();

// if (isset($_SESSION["username"])) {
//     header("Location: test");
// }

if (isset($_COOKIE["username"])) {
    header("Location: test");
}
?>

<!-- LOGIC MUST BE ON TOP (THE BULK OF YOUR PHP CODE) -->
<!-- SEPARATE YOUR CODE -->
<!-- INTERFACE (FRONTEND) SHOULD BE ON THE BOTTOM (PHP/HTML BLOCKS) -->

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Welcome to the Dashboard!</h1>
<img src="../../public/assets/cl2.png" alt="Lab Sched" width="viewport"/>

</body>
</html>