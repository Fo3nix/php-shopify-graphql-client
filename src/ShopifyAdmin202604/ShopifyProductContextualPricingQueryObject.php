<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductContextualPricingQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductContextualPricing";

    public function selectFixedQuantityRulesCount()
    {
        $this->selectField("fixedQuantityRulesCount");

        return $this;
    }

    public function selectMaxVariantPricing(ShopifyProductContextualPricingMaxVariantPricingArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantContextualPricingQueryObject("maxVariantPricing");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMinVariantPricing(ShopifyProductContextualPricingMinVariantPricingArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantContextualPricingQueryObject("minVariantPricing");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceRange(ShopifyProductContextualPricingPriceRangeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductPriceRangeV2QueryObject("priceRange");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
