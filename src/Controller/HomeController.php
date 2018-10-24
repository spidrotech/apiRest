<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
use Nelmio\ApiDocBundle\Annotation\Security;
use App\Service\MessageGenerator;

class HomeController extends Controller {

    /**
     *
     * @Rest\View()
     * @Rest\Get("api/")
     * @SWG\Response(
     *     response=200,
     *     description="Returns response"
     * )
     * @SWG\Tag(name="indexApi")
     * @Security(name="Bearer")
     */
    public function indexApiAction() {
        $msgGenerator = new MessageGenerator;
        $formatted = array(
            'message' => [$msgGenerator->getHappyMessage()],
            'status' => Response::HTTP_OK,
        );
        $view = View::create($formatted);
        $view->setFormat('json');

        return $view;
    }

}
