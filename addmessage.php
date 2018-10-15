<?php
try{
	$conn = new PDO( dsn: "mysql:host=localhost; dbname=message", username: 'root', passwd: 'root');
	if (empty($_POST['name'])) exit("Даун, поле не заполненно!");
	if (empty($_POST['content'])) exit("Даун, поле не заполненно!");

	$squery = "INSERT INTO message VALUES (NULL, :name, NOW())";
	$msg = $conn->prepare($query);
	$msg->execute(['name' => $_POST['name']]);

	$msg_id = $conn->lastInsertId();

	$query = "INSERT INTO message_content VALUES (NULL , :content, :message_id)";
	$msg = $conn->prepare($query);
	$msg->execute(['content' => $_POST['content'], 'message_id' => $msg_id]);

	header(string: "Location: index.html");
}
catch (PDOExpertion $e)
{
	echo "Ошибка далбаёб!";
}

?>