<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `paymentInstrumentSendAddEmail` mutation.
 */
class ShopifyPaymentInstrumentSendAddEmailPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentInstrumentSendAddEmailPayload";

    /**
     * The customer to whom an add payment instrument email was sent.
     */
    public function selectCustomer(?ShopifyPaymentInstrumentSendAddEmailPayloadCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
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
    public function selectUserErrors(?ShopifyPaymentInstrumentSendAddEmailPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
