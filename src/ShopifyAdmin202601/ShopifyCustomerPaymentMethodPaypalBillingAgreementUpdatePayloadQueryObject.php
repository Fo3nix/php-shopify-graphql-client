<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerPaymentMethodPaypalBillingAgreementUpdate` mutation.
 */
class ShopifyCustomerPaymentMethodPaypalBillingAgreementUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodPaypalBillingAgreementUpdatePayload";

    /**
     * The customer payment method.
     */
    public function selectCustomerPaymentMethod(?ShopifyCustomerPaymentMethodPaypalBillingAgreementUpdatePayloadCustomerPaymentMethodArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodQueryObject
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
    public function selectUserErrors(?ShopifyCustomerPaymentMethodPaypalBillingAgreementUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodUserErrorQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
