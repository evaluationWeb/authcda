<?php

namespace App\Controller;

use App\Service\EmailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{

    public function __construct(
        private readonly EmailService $emailService
    ) {}
    
    #[Route('/test', name:'app_test_testemail')]
    public function testEmail() : Response{
        dd($this->getParameter("email_user"));
        return new Response($this->emailService->test());
    }
}
