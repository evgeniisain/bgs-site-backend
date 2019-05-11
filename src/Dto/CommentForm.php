<?php

namespace App\Dto;

/**
 * Send form DTO.
 */
class CommentForm
{
    /**
     * @var int Target post identifier.
     */
    public $targetId;

    /**
     * @var string Content of this comment.
     */
    public $content;
}