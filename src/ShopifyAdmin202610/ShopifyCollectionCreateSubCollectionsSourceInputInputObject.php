<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to create a sub-collection source — a source whose membership comes from one or more referenced collections.
 */
class ShopifyCollectionCreateSubCollectionsSourceInputInputObject extends InputObject
{
    const REQUIRED = ["title", "collectionIds"];

    protected $title;
    protected $description;
    protected $collectionIds;

    /**
     * The title of the source.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * An optional description of the source.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The global IDs of the sub-collections whose products supply this source.
     */
    public function setCollectionIds(array $collectionIds): static
    {
        $this->collectionIds = $collectionIds;

        return $this;
    }
}
