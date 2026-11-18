<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Links a [`DeliveryCarrierService`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryCarrierService) with the associated shop [locations](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) where it can calculate shipping rates. Each pairing indicates the locations that can use a specific carrier service for real-time rate calculations during checkout.
 *
 * The carrier service provides the shipping rate calculation logic, while the locations represent physical or virtual fulfillment points that can ship orders using that service.
 */
class ShopifyDeliveryCarrierServiceAndLocationsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCarrierServiceAndLocations";

    /**
     * The carrier service.
     */
    public function selectCarrierService(?ShopifyDeliveryCarrierServiceAndLocationsCarrierServiceArgumentsObject $argsObject = null): ShopifyDeliveryCarrierServiceQueryObject
    {
        $object = new ShopifyDeliveryCarrierServiceQueryObject("carrierService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of locations that support this carrier service.
     */
    public function selectLocations(?ShopifyDeliveryCarrierServiceAndLocationsLocationsArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
