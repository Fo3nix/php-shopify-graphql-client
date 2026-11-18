<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a product option.
 */
class ShopifyOptionUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $name;
    protected $position;
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
     * Specifies the metafield the option is linked to.
     */
    public function setLinkedMetafield(ShopifyLinkedMetafieldUpdateInputInputObject $shopifyLinkedMetafieldUpdateInputInputObject): static
    {
        $this->linkedMetafield = $shopifyLinkedMetafieldUpdateInputInputObject;

        return $this;
    }
}
