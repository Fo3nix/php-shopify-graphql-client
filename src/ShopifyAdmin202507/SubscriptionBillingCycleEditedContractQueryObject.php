<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionBillingCycleEditedContractQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleEditedContract";

    public function selectApp(SubscriptionBillingCycleEditedContractAppArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppAdminUrl()
    {
        $this->selectField("appAdminUrl");

        return $this;
    }

    public function selectBillingCycles(SubscriptionBillingCycleEditedContractBillingCyclesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingCycleConnectionQueryObject("billingCycles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCurrencyCode()
    {
        $this->selectField("currencyCode");

        return $this;
    }

    public function selectCustomAttributes(SubscriptionBillingCycleEditedContractCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(SubscriptionBillingCycleEditedContractCustomerArgumentsObject $argsObject = null)
    {
        $object = new CustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerPaymentMethod(SubscriptionBillingCycleEditedContractCustomerPaymentMethodArgumentsObject $argsObject = null)
    {
        $object = new CustomerPaymentMethodQueryObject("customerPaymentMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryMethod(SubscriptionBillingCycleEditedContractDeliveryMethodArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDeliveryMethodUnionObject("deliveryMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPrice(SubscriptionBillingCycleEditedContractDeliveryPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("deliveryPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscounts(SubscriptionBillingCycleEditedContractDiscountsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionManualDiscountConnectionQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `linesCount` instead.
     */
    public function selectLineCount()
    {
        $this->selectField("lineCount");

        return $this;
    }

    public function selectLines(SubscriptionBillingCycleEditedContractLinesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionLineConnectionQueryObject("lines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLinesCount(SubscriptionBillingCycleEditedContractLinesCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("linesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectOrders(SubscriptionBillingCycleEditedContractOrdersArgumentsObject $argsObject = null)
    {
        $object = new OrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
