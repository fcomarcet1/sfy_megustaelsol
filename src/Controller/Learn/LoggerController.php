<?php

namespace App\Controller\Learn;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoggerController
{
    /*private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }*/

    public function __construct(private LoggerInterface $logger) {}

    #[Route('/logger', name: 'logger', methods: ['GET'])]
    public function __invoke(): JsonResponse
    {
        $this->logger->error('This is the LoggerController error');
        $this->logger->info('This is the LoggerController info');
        $this->logger->debug('This is the LoggerController debug');
        $this->logger->warning('This is the LoggerController warning');
        $this->logger->critical('This is the LoggerController critical');
        $this->logger->alert('This is the LoggerController alert');
        $this->logger->emergency('This is the LoggerController emergency');

        return new JsonResponse(['status' => 'ok']);
    }

}