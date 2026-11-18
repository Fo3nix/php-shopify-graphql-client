<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for deleting a metaobject field definition.
 */
class ShopifyMetaobjectFieldDefinitionDeleteInputInputObject extends InputObject
{
    const REQUIRED = ["key"];

    protected $key;

    /**
     * The key of the field definition to delete.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }
}
