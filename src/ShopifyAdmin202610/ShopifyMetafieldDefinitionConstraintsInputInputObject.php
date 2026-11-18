<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to create metafield definition [constraints](https://shopify.dev/apps/build/custom-data/metafields/conditional-metafield-definitions).
 * Each constraint applies a metafield definition to a subtype of a resource.
 */
class ShopifyMetafieldDefinitionConstraintsInputInputObject extends InputObject
{
    const REQUIRED = ["key", "values"];

    protected $key;
    protected $values;

    /**
     * The category of resource subtypes that the definition applies to.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * The specific constraint subtype values that the definition applies to.
     */
    public function setValues(array $values): static
    {
        $this->values = $values;

        return $this;
    }
}
