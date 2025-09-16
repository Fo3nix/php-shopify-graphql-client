<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsBalanceTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBalanceTransaction";

    public function selectAdjustmentReason()
    {
        $this->selectField("adjustmentReason");

        return $this;
    }

    public function selectAdjustmentsOrders(ShopifyPaymentsBalanceTransactionAdjustmentsOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsAdjustmentOrderQueryObject("adjustmentsOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAmount(ShopifyPaymentsBalanceTransactionAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAssociatedOrder(ShopifyPaymentsBalanceTransactionAssociatedOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsAssociatedOrderQueryObject("associatedOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAssociatedPayout(ShopifyPaymentsBalanceTransactionAssociatedPayoutArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsBalanceTransactionAssociatedPayoutQueryObject("associatedPayout");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFee(ShopifyPaymentsBalanceTransactionFeeArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("fee");
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

    public function selectNet(ShopifyPaymentsBalanceTransactionNetArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("net");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSourceId()
    {
        $this->selectField("sourceId");

        return $this;
    }

    public function selectSourceOrderTransactionId()
    {
        $this->selectField("sourceOrderTransactionId");

        return $this;
    }

    public function selectSourceType()
    {
        $this->selectField("sourceType");

        return $this;
    }

    public function selectTest()
    {
        $this->selectField("test");

        return $this;
    }

    public function selectTransactionDate()
    {
        $this->selectField("transactionDate");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
