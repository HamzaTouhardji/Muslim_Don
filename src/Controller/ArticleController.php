<?php
namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @var ArticleRepository;
     */
    private $repository;

    /**
     * @var ObjetManager;
     */
    private $em;

    public function __construct(ArticleRepository $repository/*, ObjectManager $em*/)
    {
        $this->repository = $repository;
        //$this->em = $em; 33 min
    }

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

        //sans l'injection 
        //$repository = $this->getDoctrine()->getRepository(Article::class);

        //Les methodes pour recuper les artciles da la base de donnéé 
        /*$unArcticle = $this->repository->find(1);
        dump($unArcticle);*/

        //$entityManager = $this->getDoctrine()->getManager();


        return $this->render('article/index.html.twig', [
            'current_menu' => 'articles'
        ]);
    }
}
