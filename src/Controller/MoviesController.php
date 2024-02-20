<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{

    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        $allMovies = ["Iron Man", "Spider Man", "Ant Man"];

        return $this->render('index.html.twig', array(
            "title" => "static title",
            "movies" => $allMovies
        ));
    }

    #[Route('/movies', name: 'app_movies')]
    public function movies(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }


    #[Route('/movie/{name}', name: 'app_movie',defaults: ['name' => null], methods: ["GET", "HEAD"])]
    public function getMovie($name): JsonResponse
    {
        return $this->json([
            'message' => $name,
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
}
