<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionDraftQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDraft";

    public function selectBillingCycle(ShopifySubscriptionDraftBillingCycleArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingCycleQueryObject("billingCycle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBillingPolicy(ShopifySubscriptionDraftBillingPolicyArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingPolicyQueryObject("billingPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConcatenatedBillingCycles(ShopifySubscriptionDraftConcatenatedBillingCyclesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingCycleConnectionQueryObject("concatenatedBillingCycles");
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

    public function selectCustomAttributes(ShopifySubscriptionDraftCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(ShopifySubscriptionDraftCustomerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerPaymentMethod(ShopifySubscriptionDraftCustomerPaymentMethodArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPaymentMethodQueryObject("customerPaymentMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryMethod(ShopifySubscriptionDraftDeliveryMethodArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDeliveryMethodUnionObject("deliveryMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryOptions(ShopifySubscriptionDraftDeliveryOptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDeliveryOptionResultUnionObject("deliveryOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPolicy(ShopifySubscriptionDraftDeliveryPolicyArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDeliveryPolicyQueryObject("deliveryPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPrice(ShopifySubscriptionDraftDeliveryPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("deliveryPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscounts(ShopifySubscriptionDraftDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDiscountConnectionQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountsAdded(ShopifySubscriptionDraftDiscountsAddedArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDiscountConnectionQueryObject("discountsAdded");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountsRemoved(ShopifySubscriptionDraftDiscountsRemovedArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDiscountConnectionQueryObject("discountsRemoved");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountsUpdated(ShopifySubscriptionDraftDiscountsUpdatedArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDiscountConnectionQueryObject("discountsUpdated");
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

    public function selectLines(ShopifySubscriptionDraftLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionLineConnectionQueryObject("lines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLinesAdded(ShopifySubscriptionDraftLinesAddedArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionLineConnectionQueryObject("linesAdded");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLinesRemoved(ShopifySubscriptionDraftLinesRemovedArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionLineConnectionQueryObject("linesRemoved");
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

    public function selectOriginalContract(ShopifySubscriptionDraftOriginalContractArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractQueryObject("originalContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `deliveryOptions` instead.
     */
    public function selectShippingOptions(ShopifySubscriptionDraftShippingOptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionShippingOptionResultUnionObject("shippingOptions");
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
