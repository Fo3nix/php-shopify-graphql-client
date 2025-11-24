<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootCurrentBulkOperationArgumentsObject extends ArgumentsObject
{
    protected $type;

    public function setType($shopifyBulkOperationType)
    {
        $this->type = new RawObject($shopifyBulkOperationType);

        return $this;
    }
}
