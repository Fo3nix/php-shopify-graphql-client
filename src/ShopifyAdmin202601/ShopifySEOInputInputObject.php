<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for SEO information.
 */
class ShopifySEOInputInputObject extends InputObject
{
    protected $title;
    protected $description;

    /**
     * SEO title of the product.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * SEO description of the product.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }
}
