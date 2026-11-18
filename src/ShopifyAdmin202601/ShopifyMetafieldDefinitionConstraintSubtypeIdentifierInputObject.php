<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to identify a subtype of a resource for the purposes of metafield definition constraints.
 */
class ShopifyMetafieldDefinitionConstraintSubtypeIdentifierInputObject extends InputObject
{
    const REQUIRED = ["key", "value"];

    protected $key;
    protected $value;

    /**
     * The category of the resource subtype.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * The specific subtype value within the identified subtype category.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
