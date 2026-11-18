<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMetaobjectDefinitionArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the metaobject to return.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
