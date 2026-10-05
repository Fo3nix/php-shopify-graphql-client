<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryCarrierServiceAndLocationsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCarrierServiceAndLocations";

    public function selectCarrierService(ShopifyDeliveryCarrierServiceAndLocationsCarrierServiceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCarrierServiceQueryObject("carrierService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocations(ShopifyDeliveryCarrierServiceAndLocationsLocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
