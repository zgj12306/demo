<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChapterController extends AbstractController
{
    /**
     * @Route("/chapter", name="chapter")
     */
    public function index(): Response
    {
        return $this->render('chapter/index.html.twig', [
            'controller_name' => 'ChapterController',
        ]);
    }

    /**
     * @Route("/chapter/new", method="POST", name="chapter_new")
     */
    public function chapterNew()
    {

    }
}
