<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `pointOfSaleDevicePaymentSessionCount` mutation.
 */
class ShopifyPointOfSaleDevicePaymentSessionCountPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDevicePaymentSessionCountPayload";

    /**
     * The point of sale device payment session after recording the count.
     */
    public function selectPointOfSaleDevicePaymentSession(?ShopifyPointOfSaleDevicePaymentSessionCountPayloadPointOfSaleDevicePaymentSessionArgumentsObject $argsObject = null): ShopifyPointOfSaleDevicePaymentSessionQueryObject
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
    public function selectUserErrors(?ShopifyPointOfSaleDevicePaymentSessionCountPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPointOfSaleDevicePaymentSessionCountUserErrorQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionCountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
