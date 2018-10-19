<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle

class HomeController extends Controller {

    /**
     *
     * @Rest\View(statusCode=Response::HTTP_OK)
     * @Rest\Get("api/")
     */
    public function indexApi() {
        $formatted = array(
            'message' => ['A REST API / SYMFONY4 / ♥'],
            'status' => Response::HTTP_OK,
        );
        // Création d'une vue FOSRestBundle
        $view = View::create($formatted);
        $view->setFormat('json');

        return $view;
    }

}
