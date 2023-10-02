<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\MicroPost;
use App\Entity\User;
use App\Entity\UserProfile;
use App\Repository\MicroPostRepository;
use App\Repository\UserProfileRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    private array $messages = [
        'maher','ben','rhouma'
    ];

    #[Route('/', name:'app_index')]
    public function index(EntityManagerInterface $entityManager, MicroPostRepository $posts): Response
    {

        // $post = new MicroPost();
        // $post->setTitle('Hello');
        // $post->setText('Hello');
        // $post->setCreated(new DateTime());

        // $post = $posts->find(7);

        // $comment = $post->getComments()[0];

        // $post->removeComment($comment);
        // $entityManager->flush();

        // $entityManager->persist($comment);
        // $entityManager->flush();

        // $user = new User();
        // $user ->setEmail('email@gmail.com');
        // $user->setPassword('123456789');

        // $profile = new UserProfile();
        // $profile->setUser($user);

        // $entityManager->persist($profile);
        // $entityManager->flush();

        // $profile = $profiles->find(1);
        // $entityManager->remove($profile);
        // $entityManager->flush();

        return $this->render(
            'hello/index.html.twig',
            [
                'messages' => $this->messages,
                'limit' => 3
            ]
        );
    }

    #[Route('/messages/{id}', name:'showOne')]
    public function showOne($id): Response
    {
        return $this->render(
            'hello/show_one.html.twig',
            [
                'message' => $this->messages[$id],
            ]
        );
    }
}