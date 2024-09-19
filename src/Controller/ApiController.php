<?php

namespace App\Controller;

use App\HttpClient\ApiHttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{
    #[Route('/articles', name: 'articles_list')]
    public function index(ApiHttpClient $apiHttpClient): Response
    {
        $articles = $apiHttpClient->getArticles();
        
        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
