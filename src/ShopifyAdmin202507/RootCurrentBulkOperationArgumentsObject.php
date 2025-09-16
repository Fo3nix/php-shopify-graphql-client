<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootCurrentBulkOperationArgumentsObject extends ArgumentsObject
{
    protected $type;

    public function setType($bulkOperationType)
    {
        $this->type = new RawObject($bulkOperationType);

        return $this;
    }
}
