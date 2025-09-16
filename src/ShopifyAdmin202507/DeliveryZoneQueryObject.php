<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryZoneQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryZone";

    public function selectCountries(DeliveryZoneCountriesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCountryQueryObject("countries");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

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
}
