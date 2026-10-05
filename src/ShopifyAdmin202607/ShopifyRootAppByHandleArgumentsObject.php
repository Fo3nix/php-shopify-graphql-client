<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootAppByHandleArgumentsObject extends ArgumentsObject
{
    protected $handle;

    public function setHandle($handle)
    {
        $this->handle = $handle;

        return $this;
    }
}
