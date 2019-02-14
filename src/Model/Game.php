<?php

declare(strict_types=1);

namespace App\Model;

use App\Console\ConsoleInteraction;

class Game
{
    /** @var ConsoleInteraction */
    private $consoleInteraction;

    public function __construct(ConsoleInteraction $consoleInteraction)
    {
        $this->consoleInteraction = $consoleInteraction;
    }

    public function start(): void
    {
        $this->consoleInteraction->gameSay('Hello !');
        do{
            $joueurs[] = $this->consoleInteraction->askText('Quel est votre nom ?');
            $mise = $this->consoleInteraction->askInt('Combien avez vous dans votre poche ? (en €)');
            $choix = $this->consoleInteraction->askYesNo('Ajouter un joueur ? (Oui/Non)');

        }while($choix === true);

        $nbJoueur = count($joueurs);
        $names = '';
        foreach ($joueurs as $joueur){
            $names .= $joueur.', ';
        }
        $names = substr($names, 0, -2);

        $this->consoleInteraction->gameSay("$nbJoueur joueurs ont rejoint la partie !");
        $this->consoleInteraction->gameSay('Bienvenue à : '.$names);
        $this->consoleInteraction->gameSay('Faites vos jeux !');

    }
}
