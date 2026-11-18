<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetaobjectUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "metaobject"];

    protected $id;
    protected $metaobject;

    /**
     * The ID of the metaobject to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Specifies parameters to update on the metaobject.
     */
    public function setMetaobject(ShopifyMetaobjectUpdateInputInputObject $shopifyMetaobjectUpdateInputInputObject): static
    {
        $this->metaobject = $shopifyMetaobjectUpdateInputInputObject;

        return $this;
    }
}
