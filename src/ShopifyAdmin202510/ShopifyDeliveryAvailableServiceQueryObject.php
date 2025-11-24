<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryAvailableServiceQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryAvailableService";

    public function selectCountries(ShopifyDeliveryAvailableServiceCountriesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCountryCodesOrRestOfWorldQueryObject("countries");
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
