<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Represents subscription contract common fields.
 */
class ShopifySubscriptionContractBaseInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "SubscriptionContractBase";

    /**
     * The subscription app that the subscription contract is registered to.
     */
    public function selectApp(?ShopifySubscriptionContractBaseAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The URL of the subscription contract page on the subscription app.
     */
    public function selectAppAdminUrl(): static
    {
        $this->selectField("appAdminUrl");

        return $this;
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
    public function selectCustomAttributes(?ShopifySubscriptionContractBaseCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
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
    public function selectCustomer(?ShopifySubscriptionContractBaseCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
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
    public function selectCustomerPaymentMethod(?ShopifySubscriptionContractBaseCustomerPaymentMethodArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodQueryObject
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
    public function selectDeliveryMethod(?ShopifySubscriptionContractBaseDeliveryMethodArgumentsObject $argsObject = null): ShopifySubscriptionDeliveryMethodUnionObject
    {
        $object = new ShopifySubscriptionDeliveryMethodUnionObject("deliveryMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The delivery price for each billing of the subscription contract.
     */
    public function selectDeliveryPrice(?ShopifySubscriptionContractBaseDeliveryPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
    public function selectDiscounts(?ShopifySubscriptionContractBaseDiscountsArgumentsObject $argsObject = null): ShopifySubscriptionManualDiscountConnectionQueryObject
    {
        $object = new ShopifySubscriptionManualDiscountConnectionQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of lines associated with the subscription contract.
     *
     * @deprecated Use `linesCount` instead.
     */
    public function selectLineCount(): static
    {
        $this->selectField("lineCount");

        return $this;
    }

    /**
     * The list of subscription lines associated with the subscription contract.
     */
    public function selectLines(?ShopifySubscriptionContractBaseLinesArgumentsObject $argsObject = null): ShopifySubscriptionLineConnectionQueryObject
    {
        $object = new ShopifySubscriptionLineConnectionQueryObject("lines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of lines associated with the subscription contract.
     */
    public function selectLinesCount(?ShopifySubscriptionContractBaseLinesCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("linesCount");
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

    /**
     * A list of the subscription contract's orders.
     */
    public function selectOrders(?ShopifySubscriptionContractBaseOrdersArgumentsObject $argsObject = null): ShopifyOrderConnectionQueryObject
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the subscription contract was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function onSubscriptionBillingCycleEditedContract(): ShopifySubscriptionBillingCycleEditedContractQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleEditedContractQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionContract(): ShopifySubscriptionContractQueryObject
    {
        $object = new ShopifySubscriptionContractQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
