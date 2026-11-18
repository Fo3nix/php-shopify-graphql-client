<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A customer's saved payment method. Stores the payment instrument details and billing information for recurring charges.
 *
 * The payment method supports types included in the [`CustomerPaymentInstrument`](https://shopify.dev/docs/api/admin-graphql/latest/unions/CustomerPaymentInstrument) union.
 */
class ShopifyCustomerPaymentMethodQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethod";

    /**
     * The customer to whom the payment method belongs.
     */
    public function selectCustomer(?ShopifyCustomerPaymentMethodCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of this payment method.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The instrument for this payment method.
     */
    public function selectInstrument(?ShopifyCustomerPaymentMethodInstrumentArgumentsObject $argsObject = null): ShopifyCustomerPaymentInstrumentUnionObject
    {
        $object = new ShopifyCustomerPaymentInstrumentUnionObject("instrument");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The mandates associated with the payment method.
     */
    public function selectMandates(?ShopifyCustomerPaymentMethodMandatesArgumentsObject $argsObject = null): ShopifyPaymentMandateResourceConnectionQueryObject
    {
        $object = new ShopifyPaymentMandateResourceConnectionQueryObject("mandates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The time that the payment method was revoked.
     */
    public function selectRevokedAt(): static
    {
        $this->selectField("revokedAt");

        return $this;
    }

    /**
     * The revocation reason for this payment method.
     */
    public function selectRevokedReason(): static
    {
        $this->selectField("revokedReason");

        return $this;
    }

    /**
     * List Subscription Contracts.
     */
    public function selectSubscriptionContracts(?ShopifyCustomerPaymentMethodSubscriptionContractsArgumentsObject $argsObject = null): ShopifySubscriptionContractConnectionQueryObject
    {
        $object = new ShopifySubscriptionContractConnectionQueryObject("subscriptionContracts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
