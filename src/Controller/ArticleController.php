<?php
namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/articles", name="article.index")
     * @return Response
     */
    public function index(): Response
    {
        //Pour creer un article a la main 
        /*$article = new Article();
        $article->setTitle("Mon premier article")
            ->setDescription("La description de mon article");
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();*/
        

        return $this->render('article/index.html.twig', [
            'current_menu' => 'articles'
        ]);
    }
}
