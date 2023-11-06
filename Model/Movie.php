<?php


class Movie
{
    //dichiaro le variabili d'istanza;
    public $title;
    public $type;
    public $nationality;
    public $description;
    public $image;

    //dichiaro il costruttore e gli passo le variabili;
    public function __construct(string $_title, array $_type, string $_nationality, string $_description, Media $_image = null)
    {
        $this->title = $_title;
        $this->type = $_type;
        $this->nationality = $_nationality;
        $this->description = $_description;
        $this->image = $_image;
    }
};