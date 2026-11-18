<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The price of a [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) in a specific country. Shows the minimum and maximum variant prices through the price range and the count of fixed quantity rules that apply to the product's variants in the given pricing context.
 */
class ShopifyProductContextualPricingQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductContextualPricing";

    /**
     * The number of fixed quantity rules for the product's variants on the price list.
     */
    public function selectFixedQuantityRulesCount(): static
    {
        $this->selectField("fixedQuantityRulesCount");

        return $this;
    }

    /**
     * The pricing of the variant with the highest price in the given context.
     */
    public function selectMaxVariantPricing(?ShopifyProductContextualPricingMaxVariantPricingArgumentsObject $argsObject = null): ShopifyProductVariantContextualPricingQueryObject
    {
        $object = new ShopifyProductVariantContextualPricingQueryObject("maxVariantPricing");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The pricing of the variant with the lowest price in the given context.
     */
    public function selectMinVariantPricing(?ShopifyProductContextualPricingMinVariantPricingArgumentsObject $argsObject = null): ShopifyProductVariantContextualPricingQueryObject
    {
        $object = new ShopifyProductVariantContextualPricingQueryObject("minVariantPricing");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The minimum and maximum prices of a product, expressed in decimal numbers.
     * For example, if the product is priced between $10.00 and $50.00,
     * then the price range is $10.00 - $50.00.
     */
    public function selectPriceRange(?ShopifyProductContextualPricingPriceRangeArgumentsObject $argsObject = null): ShopifyProductPriceRangeV2QueryObject
    {
        $object = new ShopifyProductPriceRangeV2QueryObject("priceRange");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
