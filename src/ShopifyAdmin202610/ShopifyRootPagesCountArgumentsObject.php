<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootPagesCountArgumentsObject extends ArgumentsObject
{
    protected $limit;

    /**
     * The upper bound on count value before returning a result. Use `null` to have no limit.
     */
    public function setLimit($limit): static
    {
        $this->limit = $limit;

        return $this;
    }
}
