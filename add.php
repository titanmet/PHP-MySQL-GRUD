<?php $title = "Добавление товара"; require_once "header.php"; ?>

<div id="wrapper">
<div id="header">
	<h2>Добавление товара</h2>
</div> 

<div id="content">
<?php


	$item  = htmlspecialchars($_POST['item']);
	$price = htmlspecialchars($_POST['price']);
	$properties = htmlspecialchars($_POST['properties']);
	
	print "Товар - $item<br>";
	print "Цена - $price<br>";
    print "Свойства - $properties<br>";
	
	StartDB();

	$SQL = "INSERT INTO Товары
					(`Товар`, `Цена`, `Свойства`) 
			VALUES 	('$item', '$price', '$properties')";
	//print $SQL."<br>";
	if (mysqli_query($db, $SQL) === TRUE)
	{
		print "Записи в таблицу 'Товары' добавлены.<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	print '<a href="edit_table.php">Вернуться к таблице</a>';
	
	EndDB();
?>
	
</div>
<div id="footer">
</div>

</div>

<?php require_once "footer.php"; ?>
