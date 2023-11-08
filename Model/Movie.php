<?php


class Movie extends Production
{
    //dichiaro le variabili d'istanza;
    //anno di pubblicazione
    public $published_year;

    //durata in minuti
    public $running_time;

    //dichiaro il costruttore e gli passo le variabili;
    public function __construct(string $_title, string $_direction, array $_cast, array $_type, string $_nationality, string $_distribution, string $_description, Media $_image = null, float $_rating, string $_published_year, string $_running_time)
    {
        $this->published_year = $_published_year;
        $this->running_time = $_running_time;

        parent:: __construct($_title, $_direction, $_cast, $_type, $_nationality, $_distribution, $_description, $_image, $_rating);
    }

    public function getPublishedYear() {
        return $this->published_year;
    }

    public function getRunningTime() {
        return $this->running_time;
    }

    public function getFullInfo() {
        return "<strong>Anno di pubblicazione:</strong> $this->published_year<br> <strong>Durata:</strong> $this->running_time";
    }


};  
