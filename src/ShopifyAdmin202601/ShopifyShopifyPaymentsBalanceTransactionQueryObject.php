<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A transaction that contributes to a Shopify Payments account balance. Records money movement from charges, refunds, payouts, adjustments, or other payment activities. Includes the gross amount, processing fees, and resulting net amount that affects the account balance. Links to the source of the transaction and associated [`ShopifyPaymentsPayout`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayout) details, with optional references to [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) objects or adjustment reasons when applicable.
 */
class ShopifyShopifyPaymentsBalanceTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBalanceTransaction";

    /**
     * The reason for the adjustment that's associated with the transaction.
     *             If the source_type isn't an adjustment, the value will be null.
     */
    public function selectAdjustmentReason(): static
    {
        $this->selectField("adjustmentReason");

        return $this;
    }

    /**
     * The adjustment orders associated to the transaction.
     */
    public function selectAdjustmentsOrders(?ShopifyShopifyPaymentsBalanceTransactionAdjustmentsOrdersArgumentsObject $argsObject = null): ShopifyShopifyPaymentsAdjustmentOrderQueryObject
    {
        $object = new ShopifyShopifyPaymentsAdjustmentOrderQueryObject("adjustmentsOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount contributing to the balance transaction.
     */
    public function selectAmount(?ShopifyShopifyPaymentsBalanceTransactionAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The associated order for the balance transaction.
     */
    public function selectAssociatedOrder(?ShopifyShopifyPaymentsBalanceTransactionAssociatedOrderArgumentsObject $argsObject = null): ShopifyShopifyPaymentsAssociatedOrderQueryObject
    {
        $object = new ShopifyShopifyPaymentsAssociatedOrderQueryObject("associatedOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Payout associated with the transaction.
     */
    public function selectAssociatedPayout(?ShopifyShopifyPaymentsBalanceTransactionAssociatedPayoutArgumentsObject $argsObject = null): ShopifyShopifyPaymentsBalanceTransactionAssociatedPayoutQueryObject
    {
        $object = new ShopifyShopifyPaymentsBalanceTransactionAssociatedPayoutQueryObject("associatedPayout");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The fee amount contributing to the balance transaction.
     */
    public function selectFee(?ShopifyShopifyPaymentsBalanceTransactionFeeArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("fee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The net amount contributing to the merchant's balance.
     */
    public function selectNet(?ShopifyShopifyPaymentsBalanceTransactionNetArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("net");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the resource leading to the transaction.
     */
    public function selectSourceId(): static
    {
        $this->selectField("sourceId");

        return $this;
    }

    /**
     * The id of the
     *             [Order Transaction](https://shopify.dev/docs/admin-api/rest/reference/orders/transaction)
     *
     *             that resulted in this balance transaction.
     */
    public function selectSourceOrderTransactionId(): static
    {
        $this->selectField("sourceOrderTransactionId");

        return $this;
    }

    /**
     * The source type of the balance transaction.
     */
    public function selectSourceType(): static
    {
        $this->selectField("sourceType");

        return $this;
    }

    /**
     * Whether the transaction was created in test mode.
     */
    public function selectTest(): static
    {
        $this->selectField("test");

        return $this;
    }

    /**
     * The date and time when the balance transaction was processed.
     */
    public function selectTransactionDate(): static
    {
        $this->selectField("transactionDate");

        return $this;
    }

    /**
     * The type of transaction.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }
}
