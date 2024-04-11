<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LetterController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/letters', name: 'letter_index', methods: ['GET'])]
    public function index(): Response
    {
        // $user = $this->getUser();

        // $posts = $this->em->getRepository(Post::class)->findBy(
        //     ['user' => $user->getId()],
        // );

        return $this->render('posts/index.html.twig', [
            'letters' => $letters,
        ]);
    }

    #[Route('/letters/create', name: 'letter_create', methods: ['GET'])]
    public function create(): Response
    {
        return $this->render('letter/create.html.twig');
    }
}





