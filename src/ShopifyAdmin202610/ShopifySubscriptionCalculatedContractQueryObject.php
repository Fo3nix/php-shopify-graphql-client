<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A calculated subscription contract that can be previewed before committing.
 */
class ShopifySubscriptionCalculatedContractQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionCalculatedContract";

    /**
     * The billing policy associated with the subscription contract.
     */
    public function selectBillingPolicy(?ShopifySubscriptionCalculatedContractBillingPolicyArgumentsObject $argsObject = null): ShopifySubscriptionBillingPolicyQueryObject
    {
        $object = new ShopifySubscriptionBillingPolicyQueryObject("billingPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The currency that's used for the subscription contract.
     */
    public function selectCurrencyCode(): static
    {
        $this->selectField("currencyCode");

        return $this;
    }

    /**
     * A list of the custom attributes to be added to the generated orders.
     */
    public function selectCustomAttributes(?ShopifySubscriptionCalculatedContractCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer to whom the subscription contract belongs.
     */
    public function selectCustomer(?ShopifySubscriptionCalculatedContractCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer payment method that's used for the subscription contract.
     */
    public function selectCustomerPaymentMethod(?ShopifySubscriptionCalculatedContractCustomerPaymentMethodArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodQueryObject("customerPaymentMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The delivery method for each billing of the subscription contract.
     */
    public function selectDeliveryMethod(?ShopifySubscriptionCalculatedContractDeliveryMethodArgumentsObject $argsObject = null): ShopifySubscriptionDeliveryMethodUnionObject
    {
        $object = new ShopifySubscriptionDeliveryMethodUnionObject("deliveryMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The delivery policy associated with the subscription contract.
     */
    public function selectDeliveryPolicy(?ShopifySubscriptionCalculatedContractDeliveryPolicyArgumentsObject $argsObject = null): ShopifySubscriptionDeliveryPolicyQueryObject
    {
        $object = new ShopifySubscriptionDeliveryPolicyQueryObject("deliveryPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The delivery price for each billing of the subscription contract.
     */
    public function selectDeliveryPrice(?ShopifySubscriptionCalculatedContractDeliveryPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("deliveryPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of subscription discounts associated with the subscription contract.
     */
    public function selectDiscounts(?ShopifySubscriptionCalculatedContractDiscountsArgumentsObject $argsObject = null): ShopifySubscriptionManualDiscountConnectionQueryObject
    {
        $object = new ShopifySubscriptionManualDiscountConnectionQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of subscription lines grouped by bundle parent, with bundle components nested under their parent line.
     */
    public function selectGroupedLines(?ShopifySubscriptionCalculatedContractGroupedLinesArgumentsObject $argsObject = null): ShopifySubscriptionGroupedLineConnectionQueryObject
    {
        $object = new ShopifySubscriptionGroupedLineConnectionQueryObject("groupedLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of subscription lines associated with the subscription contract.
     */
    public function selectLines(?ShopifySubscriptionCalculatedContractLinesArgumentsObject $argsObject = null): ShopifySubscriptionLineConnectionQueryObject
    {
        $object = new ShopifySubscriptionLineConnectionQueryObject("lines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The note field that will be applied to the generated orders.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }
}
