<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerPaymentMethodCreateFromDuplicationData` mutation.
 */
class ShopifyCustomerPaymentMethodCreateFromDuplicationDataPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodCreateFromDuplicationDataPayload";

    /**
     * The customer payment method.
     */
    public function selectCustomerPaymentMethod(?ShopifyCustomerPaymentMethodCreateFromDuplicationDataPayloadCustomerPaymentMethodArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodQueryObject("customerPaymentMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerPaymentMethodCreateFromDuplicationDataPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodCreateFromDuplicationDataUserErrorQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodCreateFromDuplicationDataUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
