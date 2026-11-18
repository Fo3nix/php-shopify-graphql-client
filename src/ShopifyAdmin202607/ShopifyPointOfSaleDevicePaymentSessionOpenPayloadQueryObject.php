<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `pointOfSaleDevicePaymentSessionOpen` mutation.
 */
class ShopifyPointOfSaleDevicePaymentSessionOpenPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDevicePaymentSessionOpenPayload";

    /**
     * The created point of sale device payment session.
     */
    public function selectPointOfSaleDevicePaymentSession(?ShopifyPointOfSaleDevicePaymentSessionOpenPayloadPointOfSaleDevicePaymentSessionArgumentsObject $argsObject = null): ShopifyPointOfSaleDevicePaymentSessionQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionQueryObject("pointOfSaleDevicePaymentSession");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPointOfSaleDevicePaymentSessionOpenPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPointOfSaleDevicePaymentSessionOpenUserErrorQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionOpenUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
