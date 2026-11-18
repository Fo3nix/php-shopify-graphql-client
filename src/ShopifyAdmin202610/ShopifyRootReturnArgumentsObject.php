<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootReturnArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The [globally-unique ID](https://shopify.dev/docs/api/usage/gids)
     * of the return to retrieve.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
