<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDiscountShippingDestinationSelectionUnionObject extends UnionObject
{
    public function onShopifyDiscountCountries()
    {
        $object = new ShopifyDiscountCountriesQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCountryAll()
    {
        $object = new ShopifyDiscountCountryAllQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
