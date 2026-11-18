<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields representing a product variant position.
 */
class ShopifyProductVariantPositionInputInputObject extends InputObject
{
    const REQUIRED = ["id", "position"];

    protected $id;
    protected $position;

    /**
     * Specifies the ID of the product variant to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The order of the product variant in the list of product variants. The first position in the list is 1.
     */
    public function setPosition($position): static
    {
        $this->position = $position;

        return $this;
    }
}
