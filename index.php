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
    public function __construct(string $_title, string $_type, string $_nationality, string $_description, Media $_image = null)
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


$movies = [
    new Movie('Comandante', 'Drammatico', 'ITA', 'La storia di Salvatore Todaro, comandante di sommergibili della Regia Marina che durante la Seconda Guerra Mondiale contravvenne agli ordini del suo comando per portare in salvo i 26 uomini che avevano provato ad affondarlo.', new Media('Comandante.jpg', 'Film Comandante')),

    new Movie('Pulp Fiction', 'Crime', 'USA', 'Una giovane coppia di rapinatori e amanti, "Zucchino" (Ringo) e "Coniglietta" (Yolanda), stanno architettando il loro prossimo colpo, quando, su iniziativa di lui, decidono di operare proprio nel locale in cui si trovano. Si alzano annunciando a gran voce l\'inizio della rapina e puntando le pistole.'),

    new Movie('Il grande Lebowski', 'Commedia', 'USA/GBR', '“Drugo” Lebowski (Bridges) è un uomo originale che vivacchia senza impegnarsi, dormendo, fumando moderatamente marijuana, giocando a bowling coi suoi fidati amici (Goodman e Bushemi). Un giorno due brutti ceffi gli sporcano un tappeto. È lo spunto della vicenda. Drugo finisce invischiato nella misteriosa scomparsa della giovane moglie di un ricco si chiama Lebowski anche lui con tanto di riscatto da pagare. Incontra un’artista d’avanguardia, matta, che gli fa fare una visita ai genitali, incrocia un giocatore di bowling che crede di essere dio (Turturro), un magnate della pornografia che disegna omini supercazzuti e una banda scalcinata che cerca di recuperare il riscatto.', new Media('Lebowsky.png', 'Film Il grande Lebowski')),

    new Movie('Killers of the Flower Moon', 'Drammatico, Crime', 'USA', 'La storia di Salvatore Todaro, comandante di sommergibili della Regia Marina che durante la Seconda Guerra Mondiale contravvenne agli ordini del suo comando per portare in salvo i 26 uomini che avevano provato ad affondarlo.', new Media('Killers.jpg', 'Film Killers of the Flower Moon')),

    new Movie('The Marvels', 'Azione, Fantasy', 'USA', 'Il film è il sequel di Captain Marvel e vede l’eroina Carol Danvers / Captain Marvel fronteggiare una nuova minaccia, ma questa volta non sarà sola. Accanto a lei, infatti, ci saranno altri supereroi pronti ad affrontare i villains.'),

    new Movie('Five Nights at Freddy\'s', 'Commedia, Horror', 'USA', 'Un addetto alla sicurezza deve affrontare delle creature robotiche che entrano in azione di notte.', new Media('FNAF.jpg', 'Film Five Nights at Freddy\'s')),

    new Movie('Cocco di nonna', 'Commedia', 'USA', 'Durante il giorno Alex (Allen Covert) testa videogame e fuma spinelli, di notte si dedica allo sviluppo di un nuovo gioco di sua invenzione. Le cose iniziano a complicarsi quando Alex è costretto ad andare a vivere con la nonna Lilly e le sue amiche Grace e Bea. Ai colleghi racconta delle sue nuove inquiline belle e sexy, ma un giorno la nonna e le sue amiche si presentano sul posto di lavoro dove Alex ha già numerosi problemi con J.P., inventore di videogiochi che sembra uscito da una parodia di Matrix e con Samantha, la manager incaricata di seguire l\'ultima fase dello sviluppo de "Lo sterminatore 3" il gioco che dovrà conquistare il mercato.')
];

//var_dump($movies);

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <title>Movie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container d-flex flex-wrap  mt-5">

    <?php foreach($movies as $movie): ?>

        <div class="card m-5 " style="width: 18rem;">
            <img src="img/<?php echo $movie->image?->fileName ?? 'TPM.jpg' ?>" class="card-img-top" alt="<?php $movie->image?->title ?? '' ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $movie->title ?></h5>
                <p class="card-text"><?php echo $movie->type ?></p>
                <p class="card-text"><?php echo $movie->nationality ?></p>
                <p class="card-text"><?php echo $movie->description ?></p>
            </div>
        </div>

        <?php endforeach; ?>

    </div>

</body>

</html>