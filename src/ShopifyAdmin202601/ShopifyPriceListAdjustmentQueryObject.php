<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The type and value of a price list adjustment.
 *
 * For more information on price lists, refer to
 * [Support different pricing models](https://shopify.dev/apps/internationalization/product-price-lists).
 */
class ShopifyPriceListAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListAdjustment";

    /**
     * The type of price adjustment, such as percentage increase or decrease.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The value of price adjustment, where positive numbers reduce the prices and negative numbers
     * increase them.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
