<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to delete a storefront access token.
 */
class ShopifyStorefrontAccessTokenDeleteInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the storefront access token to delete.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
