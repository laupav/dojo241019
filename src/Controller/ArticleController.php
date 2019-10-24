<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\ArticleManager;

class ArticleController extends AbstractController
{

    /**
     * Display Article page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $articleManager = new ArticleManager();
        $article = $articleManager->selectAll();
        var_dump($article);
        return $this->twig->render('Article/index.html.twig',
            ['articles' => $article]
            );

    }
}
