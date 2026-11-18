<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderEditAddCustomItemArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "title", "price", "quantity"];

    protected $id;
    protected $title;
    protected $locationId;
    protected $price;
    protected $quantity;
    protected $taxable;
    protected $requiresShipping;

    /**
     * The ID of the [calculated order](https://shopify.dev/api/admin-graphql/latest/objects/calculatedorder)
     * or the order edit session to edit. This is the edit to which the custom item is added.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The name of the custom item to add.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The ID of the retail [location](https://shopify.dev/api/admin-graphql/latest/objects/location)
     * (if applicable) from which the custom item is sold. Used for tax calculations. A default location will be chosen automatically if none is provided.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The unit price of the custom item. This value can't be negative.
     */
    public function setPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->price = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The quantity of the custom item. This value must be greater than zero.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Whether the custom item is taxable. Defaults to `true`.
     */
    public function setTaxable($taxable): static
    {
        $this->taxable = $taxable;

        return $this;
    }

    /**
     * Whether the custom item requires shipping. Defaults to `false`.
     */
    public function setRequiresShipping($requiresShipping): static
    {
        $this->requiresShipping = $requiresShipping;

        return $this;
    }
}
