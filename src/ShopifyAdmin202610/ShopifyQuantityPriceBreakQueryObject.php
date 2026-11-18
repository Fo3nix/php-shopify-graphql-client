<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Quantity price breaks lets you offer different rates that are based on the
 * amount of a specific variant being ordered.
 */
class ShopifyQuantityPriceBreakQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityPriceBreak";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Minimum quantity required to reach new quantity break price.
     */
    public function selectMinimumQuantity(): static
    {
        $this->selectField("minimumQuantity");

        return $this;
    }

    /**
     * The price of variant after reaching the minimum quantity.
     */
    public function selectPrice(?ShopifyQuantityPriceBreakPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price list associated with this quantity break.
     */
    public function selectPriceList(?ShopifyQuantityPriceBreakPriceListArgumentsObject $argsObject = null): ShopifyPriceListQueryObject
    {
        $object = new ShopifyPriceListQueryObject("priceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product variant associated with this quantity break.
     */
    public function selectVariant(?ShopifyQuantityPriceBreakVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
