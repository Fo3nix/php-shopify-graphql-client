<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionContractQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContract";

    public function selectApp(ShopifySubscriptionContractAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("app");
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

    public function selectBillingAttempts(ShopifySubscriptionContractBillingAttemptsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingAttemptConnectionQueryObject("billingAttempts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBillingPolicy(ShopifySubscriptionContractBillingPolicyArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingPolicyQueryObject("billingPolicy");
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

    public function selectCustomAttributes(ShopifySubscriptionContractCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(ShopifySubscriptionContractCustomerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerPaymentMethod(ShopifySubscriptionContractCustomerPaymentMethodArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPaymentMethodQueryObject("customerPaymentMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryMethod(ShopifySubscriptionContractDeliveryMethodArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDeliveryMethodUnionObject("deliveryMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPolicy(ShopifySubscriptionContractDeliveryPolicyArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDeliveryPolicyQueryObject("deliveryPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPrice(ShopifySubscriptionContractDeliveryPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("deliveryPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscounts(ShopifySubscriptionContractDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionManualDiscountConnectionQueryObject("discounts");
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

    public function selectLines(ShopifySubscriptionContractLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionLineConnectionQueryObject("lines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLinesCount(ShopifySubscriptionContractLinesCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("linesCount");
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

    public function selectOrders(ShopifySubscriptionContractOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginOrder(ShopifySubscriptionContractOriginOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("originOrder");
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
