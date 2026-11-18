<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to use to edit a location.
 */
class ShopifyLocationEditInputInputObject extends InputObject
{
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
    public function setAddress(ShopifyLocationEditAddressInputInputObject $shopifyLocationEditAddressInputInputObject): static
    {
        $this->address = $shopifyLocationEditAddressInputInputObject;

        return $this;
    }

    /**
     * Whether inventory at this location is available for sale online.
     *
     * **Note:** This can't be disabled for fulfillment service locations.
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
