<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryCarrierServiceAndLocationsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCarrierServiceAndLocations";

    public function selectCarrierService(DeliveryCarrierServiceAndLocationsCarrierServiceArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCarrierServiceQueryObject("carrierService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocations(DeliveryCarrierServiceAndLocationsLocationsArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
