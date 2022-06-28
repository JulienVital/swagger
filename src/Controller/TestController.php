<?php

namespace App\Controller;

use App\Entity\Voiture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;

/**
 *
 * @package App\Controller
 */
class TestController extends AbstractController
{
    /**
     * @Route("api/test", methods={"GET"})
     * @OA\Tag(name="rewards")
     * @OA\Response(
     *     response="200",
     *     description="Successfully fetched the currently authenticated User",

     *   @OA\MediaType(mediaType="application/xml", @OA\Schema(type="object", ref=@Model(type=Voiture::class)))
     * )
     * @OA\Parameter(
     *     name="order",
     *     in="query",
     *     description="The field used to order rewards",
     *     @OA\Schema(type="string")
     * )

     */
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
