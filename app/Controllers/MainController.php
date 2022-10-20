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
        $this->show('home');
    }

    /**
     * gère l'affichage de la page profil
     */
    public function profil()
    {
        $this->show('profil');
    }
}