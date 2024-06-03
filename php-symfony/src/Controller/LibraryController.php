<?php

namespace App\Controller;


use App\Entity\Library;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
    /**
     * @Route("/library", name="library_index", methods={"GET"})
     */
    public function index(): Response
    {
        $libraries = $this->getDoctrine()->getRepository(Library::class)->findAll();
        return $this->render('library/index.html.twig', ['libraries' => $libraries]);
    }

    // Implement other CRUD actions: create, read, update, delete
}
