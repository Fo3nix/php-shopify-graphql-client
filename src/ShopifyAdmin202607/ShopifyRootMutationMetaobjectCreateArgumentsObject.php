<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetaobjectCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["metaobject"];

    protected $metaobject;

    /**
     * The parameters for the metaobject to create.
     */
    public function setMetaobject(ShopifyMetaobjectCreateInputInputObject $shopifyMetaobjectCreateInputInputObject): static
    {
        $this->metaobject = $shopifyMetaobjectCreateInputInputObject;

        return $this;
    }
}
