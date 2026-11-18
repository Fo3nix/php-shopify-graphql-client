<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `pointOfSaleDevicePaymentSessionAdjust` mutation.
 */
class ShopifyPointOfSaleDevicePaymentSessionAdjustPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDevicePaymentSessionAdjustPayload";

    /**
     * The adjusted point of sale device payment session.
     */
    public function selectPointOfSaleDevicePaymentSession(?ShopifyPointOfSaleDevicePaymentSessionAdjustPayloadPointOfSaleDevicePaymentSessionArgumentsObject $argsObject = null): ShopifyPointOfSaleDevicePaymentSessionQueryObject
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
    public function selectUserErrors(?ShopifyPointOfSaleDevicePaymentSessionAdjustPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
