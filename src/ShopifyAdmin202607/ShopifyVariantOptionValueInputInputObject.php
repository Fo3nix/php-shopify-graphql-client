<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to create or modify a product variant's option value.
 */
class ShopifyVariantOptionValueInputInputObject extends InputObject
{
    protected $id;
    protected $name;
    protected $linkedMetafieldValue;
    protected $optionId;
    protected $optionName;

    /**
     * Specifies the product option value by ID.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Specifies the product option value by name.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Metafield value associated with an option.
     */
    public function setLinkedMetafieldValue($linkedMetafieldValue): static
    {
        $this->linkedMetafieldValue = $linkedMetafieldValue;

        return $this;
    }

    /**
     * Specifies the product option by ID.
     */
    public function setOptionId($optionId): static
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * Specifies the product option by name.
     */
    public function setOptionName($optionName): static
    {
        $this->optionName = $optionName;

        return $this;
    }
}
