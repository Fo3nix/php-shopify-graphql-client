<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating or updating a product option.
 */
class ShopifyOptionSetInputInputObject extends InputObject
{
    protected $id;
    protected $name;
    protected $position;
    protected $values;
    protected $linkedMetafield;

    /**
     * Specifies the product option to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

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
     * Value associated with an option.
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
