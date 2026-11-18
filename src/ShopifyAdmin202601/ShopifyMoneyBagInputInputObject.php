<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * An input collection of monetary values in their respective currencies.
 * Represents an amount in the shop's currency and the amount as converted to the customer's currency of choice (the presentment currency).
 */
class ShopifyMoneyBagInputInputObject extends InputObject
{
    const REQUIRED = ["shopMoney"];

    protected $shopMoney;
    protected $presentmentMoney;

    /**
     * Amount in shop currency.
     */
    public function setShopMoney(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->shopMoney = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * Amount in presentment currency. If this isn't given then we assume that the presentment currency is the same as the shop's currency.
     */
    public function setPresentmentMoney(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->presentmentMoney = $shopifyMoneyInputInputObject;

        return $this;
    }
}
