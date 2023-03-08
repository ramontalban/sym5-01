<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id<\d+>}/vote/{direction<up|down>}", methods="POST")
     */
    public function commentVote($id, $direction, LoggerInterface $logger)
    {
        if ($direction === 'up') {
            $currentVoteCount = rand(7,100);
            $logger->info('voto up');
        } else {
            $currentVoteCount = rand(0,5);
            $logger->info('voto down');
        }

        return new JsonResponse(['votes' => $currentVoteCount]);

    }

}