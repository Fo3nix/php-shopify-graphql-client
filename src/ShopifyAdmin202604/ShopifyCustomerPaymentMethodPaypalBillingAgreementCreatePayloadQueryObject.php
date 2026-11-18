<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerPaymentMethodPaypalBillingAgreementCreate` mutation.
 */
class ShopifyCustomerPaymentMethodPaypalBillingAgreementCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodPaypalBillingAgreementCreatePayload";

    /**
     * The customer payment method.
     */
    public function selectCustomerPaymentMethod(?ShopifyCustomerPaymentMethodPaypalBillingAgreementCreatePayloadCustomerPaymentMethodArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodQueryObject
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
    public function selectUserErrors(?ShopifyCustomerPaymentMethodPaypalBillingAgreementCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodUserErrorQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
