<?php
include_once "App/Model/NoteModel.php";

$noteModel = new NoteModel();
$notes = $noteModel->getAll();
//var_dump($notes);
//die();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Content</td>
            <td>type_id</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($notes as $note):?>
            <tr>
                <td><?php echo $note["id"]?></td>
                <td><?php echo $note["title"]?></td>
                <td><?php echo $note["content"]?></td>
                <td><?php echo $note["type_id"]?></td>
                <td><a href="note-detail.php?id=<?php echo $note["id"]?>">Detail</a></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
