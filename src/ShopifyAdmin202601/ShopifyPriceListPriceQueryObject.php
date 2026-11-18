<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Pricing for a [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) on a [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList). Represents the variant's price, compare-at price, and whether the price is fixed or calculated using percentage-based adjustments. The [`PriceListPriceOriginType`](https://shopify.dev/docs/api/admin-graphql/latest/enums/PriceListPriceOriginType) distinguishes between prices set directly on the price list (fixed) and prices calculated using the price list's adjustment configuration (relative).
 *
 * Learn more about [building catalogs with different pricing models](https://shopify.dev/docs/apps/build/markets/build-catalog).
 */
class ShopifyPriceListPriceQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListPrice";

    /**
     * The compare-at price of the product variant on this price list.
     */
    public function selectCompareAtPrice(?ShopifyPriceListPriceCompareAtPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("compareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The origin of a price, either fixed (defined on the price list) or relative (calculated using a price list adjustment configuration).
     */
    public function selectOriginType(): static
    {
        $this->selectField("originType");

        return $this;
    }

    /**
     * The price of the product variant on this price list.
     */
    public function selectPrice(?ShopifyPriceListPricePriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of quantity breaks for the product variant.
     */
    public function selectQuantityPriceBreaks(?ShopifyPriceListPriceQuantityPriceBreaksArgumentsObject $argsObject = null): ShopifyQuantityPriceBreakConnectionQueryObject
    {
        $object = new ShopifyQuantityPriceBreakConnectionQueryObject("quantityPriceBreaks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product variant associated with this price.
     */
    public function selectVariant(?ShopifyPriceListPriceVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
