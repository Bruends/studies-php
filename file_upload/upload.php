<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upload de arquivos</title>
</head>
<body>
 <!-- the form must have an enctype multipart/form-data  -->
 <form action="" method="POST" enctype="multipart/form-data">
 	<label for="file">Escolha um arquivo: </label>
 	<input type="file" name="file">
 	<input type="submit" name="submit" value="enviar">
 </form>
</body>
</html>

<?php
	if(isset($_FILES["file"])) {
		// getting image data
		$fileName = $_FILES["file"]["name"];
		$tmpName  = $_FILES["file"]["tmp_name"];
		$fileSize = $_FILES["file"]["size"];
		$fileExtension = explode(".", $_FILES["file"]["name"])[1];
		// creating a new name
		$newName = time() . "." . $fileExtension;
		// moving file to folder 
		$path = "files/" . $newName;
		move_uploaded_file($tmpName, $path);
	}
?>

<!-- file info -->
<?php if(isset($_FILES["file"])): ?>
	<p>nome: <?= $fileName ?></p>
	<p> tamanho: <?= $fileSize ?> bytes </p>
	<a href=<?= $path ?>>arquivo</a>
<?php endif; ?>

