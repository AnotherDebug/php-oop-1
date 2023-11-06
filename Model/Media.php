<?php

class Media
{
    public $fileName;
    public $title;
    public $type = 'image';

    public function __construct($_fileName, $_title)
    {
        $this->fileName = $_fileName;
        $this->title = $_title;
    }
};