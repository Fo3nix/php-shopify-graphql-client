<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTaxonomyMeasurementAttributeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyMeasurementAttribute";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectOptions(ShopifyTaxonomyMeasurementAttributeOptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAttributeQueryObject("options");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
