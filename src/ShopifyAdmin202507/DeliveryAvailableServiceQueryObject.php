<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryAvailableServiceQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryAvailableService";

    public function selectCountries(DeliveryAvailableServiceCountriesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCountryCodesOrRestOfWorldQueryObject("countries");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
