<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerPaymentMethodSendUpdateEmail` mutation.
 */
class ShopifyCustomerPaymentMethodSendUpdateEmailPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodSendUpdateEmailPayload";

    /**
     * The customer to whom an update payment method email was sent.
     */
    public function selectCustomer(?ShopifyCustomerPaymentMethodSendUpdateEmailPayloadCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerPaymentMethodSendUpdateEmailPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
