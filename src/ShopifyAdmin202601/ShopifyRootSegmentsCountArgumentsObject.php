<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootSegmentsCountArgumentsObject extends ArgumentsObject
{
    protected $limit;

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}
