<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying a product to unpublish from a channel and the sales channels to unpublish it from.
 */
class ShopifyProductUnpublishInputInputObject extends InputObject
{
    const REQUIRED = ["id", "productPublications"];

    protected $id;
    protected $productPublications;

    /**
     * The ID of the product to create or update publications for.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The channels to unpublish the product from.
     */
    public function setProductPublications(array $productPublications): static
    {
        $this->productPublications = $productPublications;

        return $this;
    }
}
