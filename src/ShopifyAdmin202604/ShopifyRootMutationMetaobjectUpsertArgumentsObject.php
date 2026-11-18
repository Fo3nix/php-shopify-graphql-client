<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetaobjectUpsertArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["handle", "metaobject"];

    protected $handle;
    protected $metaobject;

    /**
     * The identifier of the metaobject to upsert.
     */
    public function setHandle(ShopifyMetaobjectHandleInputInputObject $shopifyMetaobjectHandleInputInputObject): static
    {
        $this->handle = $shopifyMetaobjectHandleInputInputObject;

        return $this;
    }

    /**
     * The parameters to upsert the metaobject.
     */
    public function setMetaobject(ShopifyMetaobjectUpsertInputInputObject $shopifyMetaobjectUpsertInputInputObject): static
    {
        $this->metaobject = $shopifyMetaobjectUpsertInputInputObject;

        return $this;
    }
}
