<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyBag;

/**
 * Generic attributes of a suggested refund method.
 */
interface ShopifySuggestedRefundMethod
{
    
    /**
     * The suggested amount to refund in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmount(): ?ShopifyMoneyBag;

    
    /**
     * The maximum available amount to refund in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getMaximumRefundable(): ?ShopifyMoneyBag;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
