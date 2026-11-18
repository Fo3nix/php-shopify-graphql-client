<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMetaobjectByHandleArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["handle"];

    protected $handle;

    /**
     * The identifier of the metaobject to return.
     */
    public function setHandle(ShopifyMetaobjectHandleInputInputObject $shopifyMetaobjectHandleInputInputObject): static
    {
        $this->handle = $shopifyMetaobjectHandleInputInputObject;

        return $this;
    }
}
