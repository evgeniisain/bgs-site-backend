<?php

namespace App\Dto;

/**
 * Create/Update blog post DTO.
 */
class PostForm
{
    /** @var int Identifier. */
    public $id;

    /**
     * @var string Title of blog post.
     */
    public $title;

    /**
     * @var string Content of blog post.
     */
    public $content;

    /**
     * @var string Short representation of content.
     */
    public $short;
}