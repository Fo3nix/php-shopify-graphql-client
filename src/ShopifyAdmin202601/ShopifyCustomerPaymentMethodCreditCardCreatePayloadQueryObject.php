<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerPaymentMethodCreditCardCreate` mutation.
 */
class ShopifyCustomerPaymentMethodCreditCardCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodCreditCardCreatePayload";

    /**
     * The customer payment method.
     */
    public function selectCustomerPaymentMethod(?ShopifyCustomerPaymentMethodCreditCardCreatePayloadCustomerPaymentMethodArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodQueryObject("customerPaymentMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * If the card verification result is processing. When this is true, customer_payment_method will be null.
     */
    public function selectProcessing(): static
    {
        $this->selectField("processing");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerPaymentMethodCreditCardCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
