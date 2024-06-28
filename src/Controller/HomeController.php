<?php

// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        // Mock data for users, posts, and comments
        $posts = [
            [
                'user' => 'User1',
                'title' => 'Post Title 1',
                'content' => 'Content for post 1.',
                'comments' => [
                    ['user' => 'Commenter1', 'content' => 'Comment content 1.'],
                    ['user' => 'Commenter2', 'content' => 'Comment content 2.'],
                ],
            ],
            [
                'user' => 'User2',
                'title' => 'Post Title 2',
                'content' => 'Content for post 2.',
                'comments' => [
                    ['user' => 'Commenter3', 'content' => 'Comment content 3.'],
                ],
            ],
        ];

        return $this->render('home/home.html.twig', [
            'posts' => $posts,
        ]);
    }
}

