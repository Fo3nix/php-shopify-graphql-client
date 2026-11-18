<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a sub-collection source — a source whose membership comes from one or more referenced collections.
 */
class ShopifyCollectionUpdateSubCollectionsSourceInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $collectionIds;
    protected $title;
    protected $description;

    /**
     * The ID of the source to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The global IDs of the sub-collections whose products supply this source. When provided, it replaces the source's current referenced collections.
     */
    public function setCollectionIds(array $collectionIds): static
    {
        $this->collectionIds = $collectionIds;

        return $this;
    }

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
}
