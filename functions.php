<?require_once("connect.php")?>
<?
$check = $_REQUEST['check'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['msg'];

// function reviewAdding($connect, string $message, string $name, string $email) {
//     echo "Пишем в базу";
//     mysqli_query($connect, "INSERT INTO `rewiews` (`id`, `message`, `name`, `email`) VALUES (NULL, '$message', '$name', '$email');");
// }

// reviewAdding($connect, $message, $name, $email);
?>