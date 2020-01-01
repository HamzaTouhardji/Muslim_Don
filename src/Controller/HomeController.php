<?php
namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index(ArticleRepository $repository): Response
    {
        $derniersArticles = $repository->findLatest();
        return $this->render('Home.html.twig', [
            'derniersArticles' => $derniersArticles
        ]);
    }
}
