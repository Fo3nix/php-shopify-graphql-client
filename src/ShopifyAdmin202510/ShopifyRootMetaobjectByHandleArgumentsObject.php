<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMetaobjectByHandleArgumentsObject extends ArgumentsObject
{
    protected $handle;

    public function setHandle(ShopifyMetaobjectHandleInputInputObject $shopifyMetaobjectHandleInputInputObject)
    {
        $this->handle = $shopifyMetaobjectHandleInputInputObject;

        return $this;
    }
}
