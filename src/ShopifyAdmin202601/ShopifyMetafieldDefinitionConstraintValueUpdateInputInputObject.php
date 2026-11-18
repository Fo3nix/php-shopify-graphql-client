<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The inputs fields for modifying a metafield definition's constraint subtype values.
 * Exactly one option is required.
 */
class ShopifyMetafieldDefinitionConstraintValueUpdateInputInputObject extends InputObject
{
    protected $create;
    protected $delete;

    /**
     * The constraint subtype value to create.
     */
    public function setCreate($create): static
    {
        $this->create = $create;

        return $this;
    }

    /**
     * The constraint subtype value to delete.
     */
    public function setDelete($delete): static
    {
        $this->delete = $delete;

        return $this;
    }
}
