<?php
require_once('vendor/autoload.php');
require_once('algo.php');
use algo\process;
use phpseclib\Crypt\Hash;

$host_name = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'user_cred';
$s_command = new mysqli($host_name, $db_user, $db_pass, $db_name);

$user_name = $_POST['username'];
$user_passwd = $_POST['password'];

$cipher = new process();
$cipher->setKey("12358953");
$cipher->setIV(4);

$encrypted_password = $cipher->process($user_passwd);

$hash_obj = new phpseclib\Crypt\Hash();
$hashed_password = $hash_obj->hash($encrypted_password);

$statement = $s_command->prepare("SELECT hashed_password FROM cust_details WHERE username=?");
$statement->bind_param("s", $user_name);
$statement->execute();
$statement->store_result();

if ($statement->num_rows == 1) {
    $statement->bind_result($stored_hashed_password);
    $statement->fetch();

    if ($stored_hashed_password === $hashed_password)
    {
        header("Location: success.html");
        exit;
    }
    else
    {
        echo '<script>window.location.href="login.html",alert("Wrong Password");</script>';
        exit;
    }
}
else
{
    echo '<script>window.location.href="login.html",alert("User Does Not Exist");</script>';
    exit;
}

$statement->close();
$s_command->close();
?>