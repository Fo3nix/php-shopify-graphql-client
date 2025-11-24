<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\UnionObject;

class ShopifyTaxonomyCategoryAttributeUnionObject extends UnionObject
{
    public function onShopifyTaxonomyAttribute()
    {
        $object = new ShopifyTaxonomyAttributeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyTaxonomyChoiceListAttribute()
    {
        $object = new ShopifyTaxonomyChoiceListAttributeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyTaxonomyMeasurementAttribute()
    {
        $object = new ShopifyTaxonomyMeasurementAttributeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
