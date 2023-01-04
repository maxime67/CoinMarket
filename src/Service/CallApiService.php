<?php

namespace App\Service;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;


class CallApiService
{
	private $client;
	
	    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
}