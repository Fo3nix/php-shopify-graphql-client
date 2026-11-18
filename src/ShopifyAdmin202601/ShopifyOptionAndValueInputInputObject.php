<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the options and values of the combined listing.
 */
class ShopifyOptionAndValueInputInputObject extends InputObject
{
    const REQUIRED = ["name", "values"];

    protected $name;
    protected $values;
    protected $optionId;
    protected $linkedMetafield;

    /**
     * The name of the Product's Option.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The ordered values of the Product's Option.
     */
    public function setValues(array $values): static
    {
        $this->values = $values;

        return $this;
    }

    /**
     * The ID of the option to update. If not present, the option will be created.
     */
    public function setOptionId($optionId): static
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * The linked metafield for the product's option.
     */
    public function setLinkedMetafield(ShopifyLinkedMetafieldInputInputObject $shopifyLinkedMetafieldInputInputObject): static
    {
        $this->linkedMetafield = $shopifyLinkedMetafieldInputInputObject;

        return $this;
    }
}
