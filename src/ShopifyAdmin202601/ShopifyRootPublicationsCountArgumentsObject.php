<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootPublicationsCountArgumentsObject extends ArgumentsObject
{
    protected $catalogType;
    protected $limit;

    /**
     * Filter publications by catalog type.
     */
    public function setCatalogType($shopifyCatalogType): static
    {
        $this->catalogType = new RawObject($shopifyCatalogType);

        return $this;
    }

    /**
     * The upper bound on count value before returning a result. Use `null` to have no limit.
     */
    public function setLimit($limit): static
    {
        $this->limit = $limit;

        return $this;
    }
}
