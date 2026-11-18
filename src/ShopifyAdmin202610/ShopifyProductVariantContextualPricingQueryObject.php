<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The price of a product variant in a specific country.
 * Prices vary between countries.
 */
class ShopifyProductVariantContextualPricingQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantContextualPricing";

    /**
     * The record of how the price was determined.
     */
    public function selectAuditTrail(?ShopifyProductVariantContextualPricingAuditTrailArgumentsObject $argsObject = null): ShopifyPricingAuditTrailQueryObject
    {
        $object = new ShopifyPricingAuditTrailQueryObject("auditTrail");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The final compare-at price after all adjustments are applied.
     */
    public function selectCompareAtPrice(?ShopifyProductVariantContextualPricingCompareAtPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("compareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The final price after all adjustments are applied.
     */
    public function selectPrice(?ShopifyProductVariantContextualPricingPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
    public function selectQuantityPriceBreaks(?ShopifyProductVariantContextualPricingQuantityPriceBreaksArgumentsObject $argsObject = null): ShopifyQuantityPriceBreakConnectionQueryObject
    {
        $object = new ShopifyQuantityPriceBreakConnectionQueryObject("quantityPriceBreaks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity rule applied for a given context.
     */
    public function selectQuantityRule(?ShopifyProductVariantContextualPricingQuantityRuleArgumentsObject $argsObject = null): ShopifyQuantityRuleQueryObject
    {
        $object = new ShopifyQuantityRuleQueryObject("quantityRule");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unit price value for the given context based on the variant measurement.
     */
    public function selectUnitPrice(?ShopifyProductVariantContextualPricingUnitPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("unitPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
