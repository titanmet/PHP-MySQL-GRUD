<?php $title = "Изменение товара"; require_once "header.php"; 
	
	StartDB();
	$id = $_POST['id'];
	$item  = htmlspecialchars($_POST['item']);
	$price = htmlspecialchars($_POST['price']);
    $properties = htmlspecialchars($_POST['properties']);
	$SQL = "UPDATE Товары SET `Товар`='$item', `Цена`='$price', `Свойства`='$properties' WHERE `Код товара`='$id'";

	if (!$result = mysqli_query($db, $SQL)) 
	{
		printf("Ошибка в запросе: %s\n", mysqli_error($db));
	}
	EndDB();
	header("Location: edit_table.php");	
