<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionContractQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContract";

    public function selectApp(SubscriptionContractAppArgumentsObject $argsObject = null)
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

    public function selectBillingAttempts(SubscriptionContractBillingAttemptsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingAttemptConnectionQueryObject("billingAttempts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBillingPolicy(SubscriptionContractBillingPolicyArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingPolicyQueryObject("billingPolicy");
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

    public function selectCustomAttributes(SubscriptionContractCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(SubscriptionContractCustomerArgumentsObject $argsObject = null)
    {
        $object = new CustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerPaymentMethod(SubscriptionContractCustomerPaymentMethodArgumentsObject $argsObject = null)
    {
        $object = new CustomerPaymentMethodQueryObject("customerPaymentMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryMethod(SubscriptionContractDeliveryMethodArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDeliveryMethodUnionObject("deliveryMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPolicy(SubscriptionContractDeliveryPolicyArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDeliveryPolicyQueryObject("deliveryPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPrice(SubscriptionContractDeliveryPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("deliveryPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscounts(SubscriptionContractDiscountsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionManualDiscountConnectionQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLastBillingAttemptErrorType()
    {
        $this->selectField("lastBillingAttemptErrorType");

        return $this;
    }

    public function selectLastPaymentStatus()
    {
        $this->selectField("lastPaymentStatus");

        return $this;
    }

    /**
     * @deprecated Use `linesCount` instead.
     */
    public function selectLineCount()
    {
        $this->selectField("lineCount");

        return $this;
    }

    public function selectLines(SubscriptionContractLinesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionLineConnectionQueryObject("lines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLinesCount(SubscriptionContractLinesCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("linesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNextBillingDate()
    {
        $this->selectField("nextBillingDate");

        return $this;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectOrders(SubscriptionContractOrdersArgumentsObject $argsObject = null)
    {
        $object = new OrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginOrder(SubscriptionContractOriginOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("originOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRevisionId()
    {
        $this->selectField("revisionId");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
