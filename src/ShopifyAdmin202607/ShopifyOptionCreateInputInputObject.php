<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a product option.
 */
class ShopifyOptionCreateInputInputObject extends InputObject
{
    protected $name;
    protected $position;
    protected $values;
    protected $linkedMetafield;

    /**
     * Name of the option.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Position of the option.
     */
    public function setPosition($position): static
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Values associated with the option.
     */
    public function setValues(array $values): static
    {
        $this->values = $values;

        return $this;
    }

    /**
     * Specifies the metafield the option is linked to.
     */
    public function setLinkedMetafield(ShopifyLinkedMetafieldCreateInputInputObject $shopifyLinkedMetafieldCreateInputInputObject): static
    {
        $this->linkedMetafield = $shopifyLinkedMetafieldCreateInputInputObject;

        return $this;
    }
}
