<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootCollectionByHandleArgumentsObject extends ArgumentsObject
{
    protected $handle;

    public function setHandle($handle)
    {
        $this->handle = $handle;

        return $this;
    }
}
