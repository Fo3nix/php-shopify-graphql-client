<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a storefront access token.
 */
class ShopifyStorefrontAccessTokenInputInputObject extends InputObject
{
    const REQUIRED = ["title"];

    protected $title;

    /**
     * A title for the storefront access token.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }
}
