<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsBalanceTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBalanceTransaction";

    public function selectAdjustmentReason()
    {
        $this->selectField("adjustmentReason");

        return $this;
    }

    public function selectAdjustmentsOrders(ShopifyShopifyPaymentsBalanceTransactionAdjustmentsOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsAdjustmentOrderQueryObject("adjustmentsOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAmount(ShopifyShopifyPaymentsBalanceTransactionAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAssociatedOrder(ShopifyShopifyPaymentsBalanceTransactionAssociatedOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsAssociatedOrderQueryObject("associatedOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAssociatedPayout(ShopifyShopifyPaymentsBalanceTransactionAssociatedPayoutArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsBalanceTransactionAssociatedPayoutQueryObject("associatedPayout");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFee(ShopifyShopifyPaymentsBalanceTransactionFeeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("fee");
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

    public function selectNet(ShopifyShopifyPaymentsBalanceTransactionNetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("net");
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
