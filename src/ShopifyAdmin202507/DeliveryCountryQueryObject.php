<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryCountryQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCountry";

    public function selectCode(DeliveryCountryCodeArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCountryCodeOrRestOfWorldQueryObject("code");
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

    public function selectProvinces(DeliveryCountryProvincesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryProvinceQueryObject("provinces");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslatedName()
    {
        $this->selectField("translatedName");

        return $this;
    }
}
