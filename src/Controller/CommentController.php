<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction<up|down>}")
    */
    public function commentVote($id, $direction, LoggerInterface $logger)
    {
        //todo use id to query database

        if ($direction === 'up'){
            $logger->info('Voting up!');
            $currentVoteCount = rand(50, 100);
        }else{
        }

        return $this->json(['votes' => $currentVoteCount]);
    }
}