<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for creating a carrier-calculated shipping option.
 */
class ShopifyDeliveryCarrierCalculatedOptionDefinitionCreateInputInputObject extends InputObject
{
    const REQUIRED = ["currency", "rateGroups"];

    protected $description;
    protected $isActive;
    protected $currency;
    protected $rateGroups;
    protected $freeDeliveryMinimumValue;

    /**
     * Optional description shown to buyers.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Whether this shipping option is active and shown to buyers. Defaults to true.
     */
    public function setIsActive($isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * The currency used for all money values in this shipping option.
     */
    public function setCurrency($shopifyCurrencyCode): static
    {
        $this->currency = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * The rate groups to create for this shipping option. At this time, only a single rate group is supported for carrier calculated shipping options.
     */
    public function setRateGroups(array $rateGroups): static
    {
        $this->rateGroups = $rateGroups;

        return $this;
    }

    /**
     * The cart subtotal required for free shipping. Currency must match the shipping option's currency.
     */
    public function setFreeDeliveryMinimumValue(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->freeDeliveryMinimumValue = $shopifyMoneyInputInputObject;

        return $this;
    }
}
