
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    $file = fopen("messages.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nMessage: $message\n\n");
    fclose($file);


    header("Location: index.php?success=1");
    exit();
}
?>