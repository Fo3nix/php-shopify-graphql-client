<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to use to add a location.
 */
class ShopifyLocationAddInputInputObject extends InputObject
{
    const REQUIRED = ["name", "address"];

    protected $name;
    protected $address;
    protected $fulfillsOnlineOrders;
    protected $metafields;

    /**
     * The name of the location.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The address of the location.
     */
    public function setAddress(ShopifyLocationAddAddressInputInputObject $shopifyLocationAddAddressInputInputObject): static
    {
        $this->address = $shopifyLocationAddAddressInputInputObject;

        return $this;
    }

    /**
     * Whether inventory at this location is available for sale online.
     */
    public function setFulfillsOnlineOrders($fulfillsOnlineOrders): static
    {
        $this->fulfillsOnlineOrders = $fulfillsOnlineOrders;

        return $this;
    }

    /**
     * Additional customizable information to associate with the location.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }
}
