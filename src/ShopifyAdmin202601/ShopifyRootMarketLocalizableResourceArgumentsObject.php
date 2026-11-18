<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMarketLocalizableResourceArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["resourceId"];

    protected $resourceId;

    /**
     * Find a market localizable resource by ID.
     */
    public function setResourceId($resourceId): static
    {
        $this->resourceId = $resourceId;

        return $this;
    }
}
