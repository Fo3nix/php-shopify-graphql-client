<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to update metafield definition [constraints](https://shopify.dev/apps/build/custom-data/metafields/conditional-metafield-definitions).
 * Each constraint applies a metafield definition to a subtype of a resource.
 */
class ShopifyMetafieldDefinitionConstraintsUpdatesInputInputObject extends InputObject
{
    protected $key;
    protected $values;

    /**
     * The category of resource subtypes that the definition applies to.
     * If omitted and the definition is already constrained, the existing constraint key will be used.
     * If set to `null`, all constraints will be removed.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * The specific constraint subtype values to create or delete.
     */
    public function setValues(array $values): static
    {
        $this->values = $values;

        return $this;
    }
}
