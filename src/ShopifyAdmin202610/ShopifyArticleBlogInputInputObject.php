<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields of a blog when an article is created or updated.
 */
class ShopifyArticleBlogInputInputObject extends InputObject
{
    const REQUIRED = ["title"];

    protected $title;

    /**
     * The title of the blog.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }
}
