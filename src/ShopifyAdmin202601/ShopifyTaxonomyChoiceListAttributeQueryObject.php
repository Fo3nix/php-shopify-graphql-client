<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTaxonomyChoiceListAttributeQueryObject extends QueryObject
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

    public function selectValues(ShopifyTaxonomyChoiceListAttributeValuesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyValueConnectionQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
