<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootChannelArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel) to return.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
