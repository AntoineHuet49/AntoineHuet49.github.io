<?php

namespace App\Controllers;


class CoreController
{
    /**
     * * Property
     */

    protected $match;
    protected $router;

    // /**
    //  * * Méthodes
    //  */

    public function __construct($match, $router)
    {
        $this->match = $match;
        $this->router = $router;
    }

    /**
     * function pour afficher les differente pages,
     * à appeler dans les autre controller
     * 
     * @param {string} nom du fichier php a afficher
     */
    public function show($page, $data = [])
    {
        $data['router'] = $this->router;

        extract($data);

        require_once __DIR__ . '/../views/layouts/header.tpl.php';
        require_once __DIR__ . '/../views/' . $page . '.php';
        require_once __DIR__ . '/../views/layouts/footer.tpl.php';
    }
}