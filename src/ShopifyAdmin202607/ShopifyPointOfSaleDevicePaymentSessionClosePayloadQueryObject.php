<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `pointOfSaleDevicePaymentSessionClose` mutation.
 */
class ShopifyPointOfSaleDevicePaymentSessionClosePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDevicePaymentSessionClosePayload";

    /**
     * The closed point of sale device payment session.
     */
    public function selectPointOfSaleDevicePaymentSession(?ShopifyPointOfSaleDevicePaymentSessionClosePayloadPointOfSaleDevicePaymentSessionArgumentsObject $argsObject = null): ShopifyPointOfSaleDevicePaymentSessionQueryObject
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
    public function selectUserErrors(?ShopifyPointOfSaleDevicePaymentSessionClosePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPointOfSaleDevicePaymentSessionCloseUserErrorQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionCloseUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
