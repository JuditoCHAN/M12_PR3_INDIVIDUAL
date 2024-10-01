<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NurseController extends AbstractController
{
    #[Route('/nurse', name: 'app_nurse', methods: ['GET'])]
    public function getAll(): JsonResponse
    {
        $nurses = [
            ["id" => 1, "nombre" => "Juan", "correo" => "juan@gmail.com", "password" => "1234"],
            ["id" => 2, "nombre" => "Maria", "correo" => "Maria@gmail.com", "password" => "1234"],
            ["id" => 3, "nombre" => "Pepa", "correo" => "Pepa@gmail.com", "password" => "1234"],
            ["id" => 4, "nombre" => "Marc", "correo" => "Marc@gmail.com", "password" => "1234"]
        ];

        return new JsonResponse($nurses, Response::HTTP_OK);
        //return $this->json($nurses);
        //return new Response(json_encode($nurses), Response::HTTP_OK, ['Content-Type' => 'application/json']);
    }


}
