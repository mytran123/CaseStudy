<?php
include_once "Model/NoteModel";

class NoteController
{
    private $noteModel;

    public function __construct()
    {
        $this->noteModel = new NoteModel();
    }

    public function index()
    {
        $notes = $this->noteModel->getAll();
        include_once "View/note-list.php";
    }
}