<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

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
