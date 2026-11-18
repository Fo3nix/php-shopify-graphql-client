<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * A product taxonomy attribute interface.
 */
class ShopifyTaxonomyCategoryAttributeUnionObject extends UnionObject
{
    public function onShopifyTaxonomyAttribute(): ShopifyTaxonomyAttributeQueryObject
    {
        $object = new ShopifyTaxonomyAttributeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyTaxonomyChoiceListAttribute(): ShopifyTaxonomyChoiceListAttributeQueryObject
    {
        $object = new ShopifyTaxonomyChoiceListAttributeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyTaxonomyMeasurementAttribute(): ShopifyTaxonomyMeasurementAttributeQueryObject
    {
        $object = new ShopifyTaxonomyMeasurementAttributeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
