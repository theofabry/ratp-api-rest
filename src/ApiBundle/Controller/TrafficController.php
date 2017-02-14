<?php
namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class TrafficController extends Controller
{
    /**
     * @ApiDoc(
     *    description="Récupère la liste des lieux de l'application"
     * )
     *
     * @Rest\View()
     * @Rest\Get("/traffic")
     */
    public function trafficAction(Request $request)
    {
        $payload = [
            'payload' => 'OK'
        ];

        $view = View::create($payload);
        $view->setFormat('json');

        return $view;
    }
}