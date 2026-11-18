<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for creating a publication.
 */
class ShopifyPublicationCreateInputInputObject extends InputObject
{
    protected $catalogId;
    protected $defaultState;
    protected $autoPublish;

    /**
     * The ID of the catalog.
     */
    public function setCatalogId($catalogId): static
    {
        $this->catalogId = $catalogId;

        return $this;
    }

    /**
     * Whether to create an empty publication or prepopulate it with all products.
     */
    public function setDefaultState($shopifyPublicationCreateInputPublicationDefaultState): static
    {
        $this->defaultState = new RawObject($shopifyPublicationCreateInputPublicationDefaultState);

        return $this;
    }

    /**
     * Whether to automatically add newly created products to this publication.
     */
    public function setAutoPublish($autoPublish): static
    {
        $this->autoPublish = $autoPublish;

        return $this;
    }
}
