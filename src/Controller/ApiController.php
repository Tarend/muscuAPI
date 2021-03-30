<?php

namespace App\Controller;

use App\Entity\Atelier;
use App\Entity\Post;
use App\Form\AtelierType;
use App\Repository\CommentaireAtelierRepository;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use App\Repository\BoissonRepository;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/commentaires_ateliers/ateliers/{id}", name="api_get_atelier", methods={"GET"})
     */
    public function index(CommentaireAtelierRepository $atelierRepository)
    {

        return $this->json($atelierRepository->findBy(Atelier::class->id),200,[],['groups'=>'post:read']);

    }


}
