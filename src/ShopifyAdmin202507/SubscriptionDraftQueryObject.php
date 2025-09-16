<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDraftQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDraft";

    public function selectBillingCycle(SubscriptionDraftBillingCycleArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingCycleQueryObject("billingCycle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBillingPolicy(SubscriptionDraftBillingPolicyArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingPolicyQueryObject("billingPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConcatenatedBillingCycles(SubscriptionDraftConcatenatedBillingCyclesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingCycleConnectionQueryObject("concatenatedBillingCycles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrencyCode()
    {
        $this->selectField("currencyCode");

        return $this;
    }

    public function selectCustomAttributes(SubscriptionDraftCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(SubscriptionDraftCustomerArgumentsObject $argsObject = null)
    {
        $object = new CustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerPaymentMethod(SubscriptionDraftCustomerPaymentMethodArgumentsObject $argsObject = null)
    {
        $object = new CustomerPaymentMethodQueryObject("customerPaymentMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryMethod(SubscriptionDraftDeliveryMethodArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDeliveryMethodUnionObject("deliveryMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryOptions(SubscriptionDraftDeliveryOptionsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDeliveryOptionResultUnionObject("deliveryOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPolicy(SubscriptionDraftDeliveryPolicyArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDeliveryPolicyQueryObject("deliveryPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPrice(SubscriptionDraftDeliveryPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("deliveryPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscounts(SubscriptionDraftDiscountsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDiscountConnectionQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountsAdded(SubscriptionDraftDiscountsAddedArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDiscountConnectionQueryObject("discountsAdded");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountsRemoved(SubscriptionDraftDiscountsRemovedArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDiscountConnectionQueryObject("discountsRemoved");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountsUpdated(SubscriptionDraftDiscountsUpdatedArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDiscountConnectionQueryObject("discountsUpdated");
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

    public function selectLines(SubscriptionDraftLinesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionLineConnectionQueryObject("lines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLinesAdded(SubscriptionDraftLinesAddedArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionLineConnectionQueryObject("linesAdded");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLinesRemoved(SubscriptionDraftLinesRemovedArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionLineConnectionQueryObject("linesRemoved");
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

    public function selectOriginalContract(SubscriptionDraftOriginalContractArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionContractQueryObject("originalContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `deliveryOptions` instead.
     */
    public function selectShippingOptions(SubscriptionDraftShippingOptionsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionShippingOptionResultUnionObject("shippingOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
