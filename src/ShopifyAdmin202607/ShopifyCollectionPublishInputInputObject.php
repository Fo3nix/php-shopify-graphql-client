<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying a collection to publish and the sales channels to publish it to.
 */
class ShopifyCollectionPublishInputInputObject extends InputObject
{
    const REQUIRED = ["id", "collectionPublications"];

    protected $id;
    protected $collectionPublications;

    /**
     * The collection to create or update publications for.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The channels where the collection will be published.
     */
    public function setCollectionPublications(array $collectionPublications): static
    {
        $this->collectionPublications = $collectionPublications;

        return $this;
    }
}
