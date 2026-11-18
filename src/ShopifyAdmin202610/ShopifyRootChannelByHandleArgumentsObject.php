<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootChannelByHandleArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["handle"];

    protected $handle;

    /**
     * The unique handle of the [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel) to return.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }
}
