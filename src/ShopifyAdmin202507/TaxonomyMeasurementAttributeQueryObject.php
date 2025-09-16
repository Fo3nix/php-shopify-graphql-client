<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TaxonomyMeasurementAttributeQueryObject extends QueryObject
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

    public function selectOptions(TaxonomyMeasurementAttributeOptionsArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("options");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
