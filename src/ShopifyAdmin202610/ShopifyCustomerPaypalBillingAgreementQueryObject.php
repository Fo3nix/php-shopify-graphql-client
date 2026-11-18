<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a PayPal instrument for customer payment method.
 */
class ShopifyCustomerPaypalBillingAgreementQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaypalBillingAgreement";

    /**
     * The billing address of this payment method.
     */
    public function selectBillingAddress(?ShopifyCustomerPaypalBillingAgreementBillingAddressArgumentsObject $argsObject = null): ShopifyCustomerPaymentInstrumentBillingAddressQueryObject
    {
        $object = new ShopifyCustomerPaymentInstrumentBillingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the PayPal billing agreement is inactive.
     */
    public function selectInactive(): static
    {
        $this->selectField("inactive");

        return $this;
    }

    /**
     * Whether the payment method can be revoked.The payment method can be revoked if there are no active subscription contracts.
     */
    public function selectIsRevocable(): static
    {
        $this->selectField("isRevocable");

        return $this;
    }

    /**
     * The customers's PayPal account email address.
     */
    public function selectPaypalAccountEmail(): static
    {
        $this->selectField("paypalAccountEmail");

        return $this;
    }
}
