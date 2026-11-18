<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update a price list.
 */
class ShopifyPriceListUpdateInputInputObject extends InputObject
{
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
     * The three-letter currency code for fixed prices associated with this price list.
     */
    public function setCurrency($shopifyCurrencyCode): static
    {
        $this->currency = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * Relative adjustments to other prices.
     */
    public function setParent(ShopifyPriceListParentUpdateInputInputObject $shopifyPriceListParentUpdateInputInputObject): static
    {
        $this->parent = $shopifyPriceListParentUpdateInputInputObject;

        return $this;
    }

    /**
     * The ID of the catalog to associate with this price list.
     */
    public function setCatalogId($catalogId): static
    {
        $this->catalogId = $catalogId;

        return $this;
    }
}
