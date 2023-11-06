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
    public function __construct(string $_title, string $_type, string $_nationality, string $_description, Media $_image)
    {
        $this->title = $_title;
        $this->type = $_type;
        $this->nationality = $_nationality;
        $this->description = $_description;
        $this->image = $_image;
    }
};

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

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <title>Movie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <h1>Ciao</h1>

</body>

</html>