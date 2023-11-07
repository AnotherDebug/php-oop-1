<?php


class Production
{
    //dichiaro le variabili d'istanza;
    public $title;
    public $direction;
    public $cast;
    public $type;
    public $nationality;
    public $distribution;
    public $description;
    public $image;

    //dichiaro il costruttore e gli passo le variabili;
    public function __construct(string $_title, string $_direction, array $_cast, array $_type, string $_nationality, string $_distribution, string $_description, Media $_image = null)
    {
        $this->title = $_title;
        $this->direction = $_direction;
        $this->cast = $_cast;
        $this->type = $_type;
        $this->nationality = $_nationality;
        $this->distribution = $_distribution;
        $this->description = $_description;
        $this->image = $_image;
    }

    public function getFullInfo() {
        return "$this->title | $this->type | $this->nationality | $this->description";
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDirection() {
        return $this->direction;
    }

    public function getCast() {
        return implode(', ', $this->cast);
    }

    public function getType() {
        return implode(', ', $this->type);
    }

    public function getNationality() {
        return $this->nationality;
    }

    public function getDistribution() {
        return $this->distribution;
    }

    public function getDescription() {
        return $this->description;
    }

};    
