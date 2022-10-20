<?php

namespace App\Controllers;


class MainController extends CoreController
{
    /**
     * * Méthodes
     */

    /**
     * gère l'affichage de la page home
     */
    public function home()
    {
        // var_dump('maincontroller');
        $this->show('home');
    }
}