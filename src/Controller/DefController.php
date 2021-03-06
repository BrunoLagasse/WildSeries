<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        return $this->redirectToRoute('app_index');
    }
}