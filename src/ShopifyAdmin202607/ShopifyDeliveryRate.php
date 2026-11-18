<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;

/**
 * A shipping rate with a price and optional transit time.
 *
 * Rates define the price charged to buyers for a shipping option.
 */
interface ShopifyDeliveryRate
{
    
    /**
     * The price charged for this rate.
     *
     * @return ShopifyMoneyV2
     */
    public function getPrice(): ?ShopifyMoneyV2;

    
    /**
     * The maximum transit time estimate in seconds.
     *
     * @return int
     */
    public function getTransitTimeMaxSeconds(): ?int;

    
    /**
     * The minimum transit time estimate in seconds.
     *
     * @return int
     */
    public function getTransitTimeMinSeconds(): ?int;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
