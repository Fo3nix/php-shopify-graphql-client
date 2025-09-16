<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductContextualPricingQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductContextualPricing";

    public function selectFixedQuantityRulesCount()
    {
        $this->selectField("fixedQuantityRulesCount");

        return $this;
    }

    public function selectMaxVariantPricing(ProductContextualPricingMaxVariantPricingArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantContextualPricingQueryObject("maxVariantPricing");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMinVariantPricing(ProductContextualPricingMinVariantPricingArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantContextualPricingQueryObject("minVariantPricing");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceRange(ProductContextualPricingPriceRangeArgumentsObject $argsObject = null)
    {
        $object = new ProductPriceRangeV2QueryObject("priceRange");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
