<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingCycleEditedContractQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleEditedContract";

    public function selectApp(ShopifySubscriptionBillingCycleEditedContractAppArgumentsObject $argsObject = null)
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

    public function selectBillingCycles(ShopifySubscriptionBillingCycleEditedContractBillingCyclesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingCycleConnectionQueryObject("billingCycles");
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

    public function selectCustomAttributes(ShopifySubscriptionBillingCycleEditedContractCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(ShopifySubscriptionBillingCycleEditedContractCustomerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerPaymentMethod(ShopifySubscriptionBillingCycleEditedContractCustomerPaymentMethodArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPaymentMethodQueryObject("customerPaymentMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryMethod(ShopifySubscriptionBillingCycleEditedContractDeliveryMethodArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDeliveryMethodUnionObject("deliveryMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPrice(ShopifySubscriptionBillingCycleEditedContractDeliveryPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("deliveryPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscounts(ShopifySubscriptionBillingCycleEditedContractDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionManualDiscountConnectionQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGroupedLines(ShopifySubscriptionBillingCycleEditedContractGroupedLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionGroupedLineConnectionQueryObject("groupedLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLatestCommittedProjectedOrderTotals(ShopifySubscriptionBillingCycleEditedContractLatestCommittedProjectedOrderTotalsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractCalculationProjectedOrderTotalsQueryObject("latestCommittedProjectedOrderTotals");
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

    public function selectLines(ShopifySubscriptionBillingCycleEditedContractLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionLineConnectionQueryObject("lines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLinesCount(ShopifySubscriptionBillingCycleEditedContractLinesCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("linesCount");
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

    public function selectOrders(ShopifySubscriptionBillingCycleEditedContractOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
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
