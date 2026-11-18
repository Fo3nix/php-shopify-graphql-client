<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;

/**
 * A calculated return fee.
 */
interface ShopifyCalculatedReturnFee
{
    
    /**
     * The calculated amount of the return fee, in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmountSet(): ?ShopifyMoneyBag;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
