<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TaxonomyChoiceListAttributeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyChoiceListAttribute";

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

    public function selectValues(TaxonomyChoiceListAttributeValuesArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyValueConnectionQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
