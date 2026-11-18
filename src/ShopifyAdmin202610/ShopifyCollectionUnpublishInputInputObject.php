<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying the collection to unpublish and the sales channels to remove it from.
 */
class ShopifyCollectionUnpublishInputInputObject extends InputObject
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
     * The channels where the collection is published.
     */
    public function setCollectionPublications(array $collectionPublications): static
    {
        $this->collectionPublications = $collectionPublications;

        return $this;
    }
}
