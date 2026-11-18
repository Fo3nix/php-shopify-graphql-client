<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying a product to publish and the channels to publish it to.
 */
class ShopifyProductPublishInputInputObject extends InputObject
{
    const REQUIRED = ["id", "productPublications"];

    protected $id;
    protected $productPublications;

    /**
     * The product to create or update publications for.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The publication that the product is published to.
     */
    public function setProductPublications(array $productPublications): static
    {
        $this->productPublications = $productPublications;

        return $this;
    }
}
