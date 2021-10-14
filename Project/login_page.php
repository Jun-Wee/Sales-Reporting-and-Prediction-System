<?php include_once "include/header.php"; ?>

<!-- login form -->
<form id="loginForm" method="post" action="login_process.php">
    <h2>Login</h2>
    <p>
      <label for="username">Username&#58;</label>
      <input id="username" type="text" name="usrName" value="admin" />
    </p>
    <p>
      <label for="password">Password&#58;</label>
      <input id="password" type="password" name="psw" value="admin" />
    </p>
    <input type="submit" value="login" name="login"/>
    <p>default account <br/> username: admin <br /> password: admin <br/><br />
      *Login to signup for new user.
    </p>

    </form>


    <!-- CREATE DB & DEFAULT ACCOUNT -->
    <?php
    //create connection server to create DB
    $conn = mysqli_connect("localhost", "root", "");

    //create DB
    $sql = "CREATE DATABASE phpreps";
    @mysqli_query($conn, $sql);

    //close connection
    mysqli_close($conn);

    //create connection to DB
    $conn = mysqli_connect("localhost","root", "", "phpreps");

    //sql to create useraccount table
    $sql = "CREATE TABLE useraccount (
    username VARCHAR(15) NOT NULL UNIQUE PRIMARY KEY,
    password CHAR(40) NOT NULL,
    role INT NOT NULL
    )";

    //create table
    mysqli_query($conn, $sql);

    //close connection
    mysqli_close($conn);

    //create connection to DB
    $conn = mysqli_connect("localhost","root", "", "phpreps");

    //sql to create a default account for testing
    $user = "admin";
    $psw = "admin";
    $sql = "INSERT INTO useraccount
            (username, password, role)
            VALUES ('admin', 'admin', 0)";

    if(mysqli_query($conn, $sql)) {
    echo "Successfully create default account <br /> username: admin <br /> password: admin";
    }

    ?>

</body>

