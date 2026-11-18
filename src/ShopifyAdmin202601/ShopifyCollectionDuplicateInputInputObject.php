<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for duplicating a collection.
 */
class ShopifyCollectionDuplicateInputInputObject extends InputObject
{
    const REQUIRED = ["collectionId", "newTitle"];

    protected $collectionId;
    protected $newTitle;
    protected $copyPublications;

    /**
     * The ID of the collection to be duplicated.
     */
    public function setCollectionId($collectionId): static
    {
        $this->collectionId = $collectionId;

        return $this;
    }

    /**
     * The new title of the collection.
     */
    public function setNewTitle($newTitle): static
    {
        $this->newTitle = $newTitle;

        return $this;
    }

    /**
     * Whether to duplicate the collection's publications (channel availability). When `true` (default), the duplicated collection will be published to the same channels as the original. When `false`, the duplicated collection will be unpublished on all channels.
     */
    public function setCopyPublications($copyPublications): static
    {
        $this->copyPublications = $copyPublications;

        return $this;
    }
}
