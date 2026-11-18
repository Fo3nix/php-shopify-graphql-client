<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to fetch the available delivery options for an address.
 *
 * Use this to discover the delivery options available for the contract
 * without setting or changing the contract's committed delivery method.
 */
class ShopifySubscriptionContractCalculationFetchDeliveryOptionsInputInputObject extends InputObject
{
    const REQUIRED = ["address"];

    protected $address;
    protected $withDeliveryCustomizations;

    /**
     * The address to fetch available delivery options for.
     */
    public function setAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->address = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    /**
     * Whether to run delivery customization functions while discovering options. When `false`, delivery customization functions are bypassed and raw delivery options are returned. Defaults to `true`.
     */
    public function setWithDeliveryCustomizations($withDeliveryCustomizations): static
    {
        $this->withDeliveryCustomizations = $withDeliveryCustomizations;

        return $this;
    }
}
