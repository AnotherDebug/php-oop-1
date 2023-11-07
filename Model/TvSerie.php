<?php


class TvSerie extends Production
{
    //dichiaro le variabili d'istanza;
    //anno messa in onda primo episodio
    public $aired_from_year;

    //anno messa in onda ultimo episodio
    public $aired_to_year;

    //numero di episodi
    public $number_of_episodes;

    //numero di stagioni
    public $number_of_seasons;

    //dichiaro il costruttore e gli passo le variabili;
    public function __construct(string $_title, string $_direction, array $_cast, array $_type, string $_nationality, string $_distribution, string $_description, Media $_image = null, string $_aired_from_year, string $_aired_to_year, int $_number_of_episodes, int $_number_of_seasons)
    {
        $this->aired_from_year = $_aired_from_year;
        $this->aired_to_year = $_aired_to_year;
        $this->number_of_episodes = $_number_of_episodes;
        $this->number_of_seasons = $_number_of_seasons;

        parent:: __construct($_title, $_direction, $_cast, $_type, $_nationality, $_distribution, $_description, $_image);
    }

    public function getFirstEp() {
        return $this->aired_from_year;
    }

    public function getLastEp() {
        return $this->aired_to_year;
    }

    public function getNumEp() {
        return $this->number_of_episodes;
    }

    public function getNumSeasons() {
        return $this->number_of_seasons;
    }

    public function getInfoSeries() {
        return "<strong>Primo episodio:</strong> $this->aired_from_year<br> <strong>Ultimo episodio:</strong> $this->aired_to_year<br>  <strong>Numero di episodi:</strong> $this->number_of_episodes<br>  <strong>Stagioni:</strong> $this->number_of_seasons";
    }


};  
