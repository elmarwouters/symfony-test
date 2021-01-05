<?php

namespace App\Controller;

use App\Entity\BlogPost;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * This route could not be matched without defining a higher priority than 0.
     *
     * @Route("/blog/list", name="blog_list", priority=2)
     */
    public function list()
    {
        // ...
    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show(BlogPost $post): Response
    {
        // $post is the object whose slug matches the routing parameter

        // ...
    }

    /**
     * @Route("/blog/{page}", name="blog_index", defaults={"page": 1, "title": "Hello world!"})
     */
    public function index(int $page, string $title): Response
    {
        // ...
    }
}
