<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle

use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
use Nelmio\ApiDocBundle\Annotation\Security;

class ExamController extends Controller {

    /**
     * @Rest\View()
     * @Rest\Get("/api/exam", name="app_api_exams")
     * @SWG\Get(
     *     path="/exam",
     *     summary="Get movies",
     *     description="Get movies",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="request",
     *         in="query",
     *         description="Request request",
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Success",
     *         @SWG\Schema(ref="App/Entitiy/Exam"),
     *     )
     * )
     */
    public function getExamsAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $exams = $em->getRepository('App:Exam')->findAll();
        if (empty($exams)) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }
        $formatted = [];
        foreach ($exams as $exam) {
            $formatted[] = [
                'id' => $exam->getId(),
                'name' => $exam->getName(),
                'description' => $exam->getDescription(),
            ];
        }

        // Création d'une vue FOSRestBundle
        $view = View::create($formatted);
        $view->setFormat('json');

        return $view;
    }

}
