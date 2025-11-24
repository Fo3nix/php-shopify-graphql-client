<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderAssignedLocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderAssignedLocation";

    public function selectAddress1()
    {
        $this->selectField("address1");

        return $this;
    }

    public function selectAddress2()
    {
        $this->selectField("address2");

        return $this;
    }

    public function selectCity()
    {
        $this->selectField("city");

        return $this;
    }

    public function selectCountryCode()
    {
        $this->selectField("countryCode");

        return $this;
    }

    public function selectLocation(ShopifyFulfillmentOrderAssignedLocationLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
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

    public function selectPhone()
    {
        $this->selectField("phone");

        return $this;
    }

    public function selectProvince()
    {
        $this->selectField("province");

        return $this;
    }

    public function selectZip()
    {
        $this->selectField("zip");

        return $this;
    }
}
