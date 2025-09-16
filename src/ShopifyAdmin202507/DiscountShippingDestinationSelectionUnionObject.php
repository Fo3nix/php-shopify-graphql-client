<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DiscountShippingDestinationSelectionUnionObject extends UnionObject
{
    public function onDiscountCountries()
    {
        $object = new DiscountCountriesQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCountryAll()
    {
        $object = new DiscountCountryAllQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
