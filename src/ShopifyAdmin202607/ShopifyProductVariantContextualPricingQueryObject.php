<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductVariantContextualPricingQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantContextualPricing";

    public function selectCompareAtPrice(ShopifyProductVariantContextualPricingCompareAtPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("compareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrice(ShopifyProductVariantContextualPricingPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantityPriceBreaks(ShopifyProductVariantContextualPricingQuantityPriceBreaksArgumentsObject $argsObject = null)
    {
        $object = new ShopifyQuantityPriceBreakConnectionQueryObject("quantityPriceBreaks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantityRule(ShopifyProductVariantContextualPricingQuantityRuleArgumentsObject $argsObject = null)
    {
        $object = new ShopifyQuantityRuleQueryObject("quantityRule");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnitPrice(ShopifyProductVariantContextualPricingUnitPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("unitPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
