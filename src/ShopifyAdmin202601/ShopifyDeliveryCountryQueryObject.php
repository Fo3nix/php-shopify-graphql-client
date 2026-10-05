<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryCountryQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCountry";

    public function selectCode(ShopifyDeliveryCountryCodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCountryCodeOrRestOfWorldQueryObject("code");
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

    public function selectProvinces(ShopifyDeliveryCountryProvincesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryProvinceQueryObject("provinces");
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
