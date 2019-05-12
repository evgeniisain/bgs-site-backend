<?php

namespace App\Controller;

use App\Dto\PostForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @param PostForm $postData
     *
     * @Route(
     *     name="blog/update",
     *     path="/blog/update",
     *     methods={"GET"}
     * )
     *
     * @return JsonResponse
     */
    public function update(PostForm $postData)
    {
        return new JsonResponse(['data' => $postData]);
    }
}