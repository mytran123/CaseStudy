<?php
include_once "NoteModel.php";

$NoteModel = new NoteModel();

$id = $_GET["id"];
$note = $NoteModel->getById();