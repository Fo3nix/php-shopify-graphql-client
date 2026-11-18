<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerPaymentMethodRemoteCreate` mutation.
 */
class ShopifyCustomerPaymentMethodRemoteCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodRemoteCreatePayload";

    /**
     * The customer payment method. Note that the returned payment method may initially be in an incomplete state. Developers should poll this payment method using the customerPaymentMethod query until all required payment details have been processed.
     */
    public function selectCustomerPaymentMethod(?ShopifyCustomerPaymentMethodRemoteCreatePayloadCustomerPaymentMethodArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodQueryObject
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
    public function selectUserErrors(?ShopifyCustomerPaymentMethodRemoteCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodRemoteUserErrorQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodRemoteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
