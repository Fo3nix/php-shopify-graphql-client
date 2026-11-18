<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to create a price list.
 */
class ShopifyPriceListCreateInputInputObject extends InputObject
{
    const REQUIRED = ["name", "currency", "parent"];

    protected $name;
    protected $currency;
    protected $parent;
    protected $catalogId;

    /**
     * The unique name of the price list, used as a human-readable identifier.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Three letter currency code for fixed prices associated with this price list.
     */
    public function setCurrency($shopifyCurrencyCode): static
    {
        $this->currency = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * Relative adjustments to other prices.
     */
    public function setParent(ShopifyPriceListParentCreateInputInputObject $shopifyPriceListParentCreateInputInputObject): static
    {
        $this->parent = $shopifyPriceListParentCreateInputInputObject;

        return $this;
    }

    /**
     * The ID of the catalog to associate with this price list.If the catalog was already associated with another price list then it will be unlinked.
     */
    public function setCatalogId($catalogId): static
    {
        $this->catalogId = $catalogId;

        return $this;
    }
}
