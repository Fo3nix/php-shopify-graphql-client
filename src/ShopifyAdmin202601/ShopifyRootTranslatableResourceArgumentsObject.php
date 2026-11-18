<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootTranslatableResourceArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["resourceId"];

    protected $resourceId;

    /**
     * Find a translatable resource by ID.
     */
    public function setResourceId($resourceId): static
    {
        $this->resourceId = $resourceId;

        return $this;
    }
}
