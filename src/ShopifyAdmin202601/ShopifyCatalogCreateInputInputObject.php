<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create a catalog.
 */
class ShopifyCatalogCreateInputInputObject extends InputObject
{
    const REQUIRED = ["title", "status", "context"];

    protected $title;
    protected $status;
    protected $context;
    protected $priceListId;
    protected $publicationId;

    /**
     * The name of the catalog.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The status of the catalog.
     */
    public function setStatus($shopifyCatalogStatus): static
    {
        $this->status = new RawObject($shopifyCatalogStatus);

        return $this;
    }

    /**
     * The context associated with the catalog.
     */
    public function setContext(ShopifyCatalogContextInputInputObject $shopifyCatalogContextInputInputObject): static
    {
        $this->context = $shopifyCatalogContextInputInputObject;

        return $this;
    }

    /**
     * The ID of the price list to associate to the catalog.
     */
    public function setPriceListId($priceListId): static
    {
        $this->priceListId = $priceListId;

        return $this;
    }

    /**
     * The ID of the publication to associate to the catalog. Only include this if you need to control which products are visible in the catalog. When omitted, product availability is determined by the sales channel.
     */
    public function setPublicationId($publicationId): static
    {
        $this->publicationId = $publicationId;

        return $this;
    }
}
