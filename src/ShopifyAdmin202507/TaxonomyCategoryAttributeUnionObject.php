<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class TaxonomyCategoryAttributeUnionObject extends UnionObject
{
    public function onTaxonomyAttribute()
    {
        $object = new TaxonomyAttributeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTaxonomyChoiceListAttribute()
    {
        $object = new TaxonomyChoiceListAttributeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTaxonomyMeasurementAttribute()
    {
        $object = new TaxonomyMeasurementAttributeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
