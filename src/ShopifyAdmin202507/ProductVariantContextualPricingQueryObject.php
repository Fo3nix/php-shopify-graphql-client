<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductVariantContextualPricingQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantContextualPricing";

    public function selectCompareAtPrice(ProductVariantContextualPricingCompareAtPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("compareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrice(ProductVariantContextualPricingPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantityPriceBreaks(ProductVariantContextualPricingQuantityPriceBreaksArgumentsObject $argsObject = null)
    {
        $object = new QuantityPriceBreakConnectionQueryObject("quantityPriceBreaks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantityRule(ProductVariantContextualPricingQuantityRuleArgumentsObject $argsObject = null)
    {
        $object = new QuantityRuleQueryObject("quantityRule");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnitPrice(ProductVariantContextualPricingUnitPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("unitPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
