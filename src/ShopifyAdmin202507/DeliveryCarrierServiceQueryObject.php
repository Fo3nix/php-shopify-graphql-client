<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryCarrierServiceQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCarrierService";

    public function selectActive()
    {
        $this->selectField("active");

        return $this;
    }

    public function selectAvailableServicesForCountries(DeliveryCarrierServiceAvailableServicesForCountriesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryAvailableServiceQueryObject("availableServicesForCountries");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCallbackUrl()
    {
        $this->selectField("callbackUrl");

        return $this;
    }

    public function selectFormattedName()
    {
        $this->selectField("formattedName");

        return $this;
    }

    public function selectIcon(DeliveryCarrierServiceIconArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("icon");
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

    public function selectSupportsServiceDiscovery()
    {
        $this->selectField("supportsServiceDiscovery");

        return $this;
    }
}
