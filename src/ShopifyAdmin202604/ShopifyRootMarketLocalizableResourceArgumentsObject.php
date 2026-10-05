<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMarketLocalizableResourceArgumentsObject extends ArgumentsObject
{
    protected $resourceId;

    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;

        return $this;
    }
}
