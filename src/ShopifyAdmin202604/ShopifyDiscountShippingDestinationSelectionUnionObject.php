<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

/**
 * The type used to target the eligible countries of an order's shipping destination for which the discount applies. For example, the discount might be applicable when shipping to all countries, or only to a set of countries.
 */
class ShopifyDiscountShippingDestinationSelectionUnionObject extends UnionObject
{
    public function onShopifyDiscountCountries(): ShopifyDiscountCountriesQueryObject
    {
        $object = new ShopifyDiscountCountriesQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCountryAll(): ShopifyDiscountCountryAllQueryObject
    {
        $object = new ShopifyDiscountCountryAllQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
