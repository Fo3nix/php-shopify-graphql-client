<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `OrderTransaction` object represents a payment transaction that's associated with an order. An order
 * transaction is a specific action or event that happens within the context of an order, such as a customer paying
 * for a purchase or receiving a refund, or other payment-related activity.
 *
 * Use the `OrderTransaction` object to capture the complete lifecycle of a payment, from initial
 * authorization to final settlement, including refunds and currency exchanges. Common use cases for using the
 * `OrderTransaction` object include:
 *
 * - Processing new payments for orders
 * - Managing payment authorizations and captures
 * - Processing refunds for returned items
 * - Tracking payment status and errors
 * - Managing multi-currency transactions
 * - Handling payment gateway integrations
 *
 * Each `OrderTransaction` object has a [`kind`](https://shopify.dev/docs/api/admin-graphql/latest/enums/OrderTransactionKind)
 * that defines the type of transaction and a [`status`](https://shopify.dev/docs/api/admin-graphql/latest/enums/OrderTransactionStatus)
 * that indicates the current state of the transaction. The object stores detailed information about payment
 * methods, gateway processing, and settlement details.
 *
 * Learn more about [payment processing](https://help.shopify.com/manual/payments)
 * and [payment gateway integrations](https://www.shopify.com/ca/payment-gateways).
 */
class ShopifyOrderTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderTransaction";

    /**
     * The masked account number associated with the payment method.
     */
    public function selectAccountNumber(): static
    {
        $this->selectField("accountNumber");

        return $this;
    }

    /**
     * The amount of money.
     *
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmount(): static
    {
        $this->selectField("amount");

        return $this;
    }

    /**
     * The rounding adjustment applied on the cash amount in shop and presentment currencies.
     */
    public function selectAmountRoundingSet(?ShopifyOrderTransactionAmountRoundingSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amountRoundingSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount and currency of the transaction in shop and presentment currencies.
     */
    public function selectAmountSet(?ShopifyOrderTransactionAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount and currency of the transaction.
     *
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmountV2(?ShopifyOrderTransactionAmountV2ArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amountV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Authorization code associated with the transaction.
     *
     * @deprecated Use `paymentId` instead.
     */
    public function selectAuthorizationCode(): static
    {
        $this->selectField("authorizationCode");

        return $this;
    }

    /**
     * The time when the authorization expires. This field is available only to stores on a Shopify Plus plan.
     */
    public function selectAuthorizationExpiresAt(): static
    {
        $this->selectField("authorizationExpiresAt");

        return $this;
    }

    /**
     * Date and time when the transaction was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * An adjustment on the transaction showing the amount lost or gained  due to fluctuations in the currency exchange rate.
     */
    public function selectCurrencyExchangeAdjustment(?ShopifyOrderTransactionCurrencyExchangeAdjustmentArgumentsObject $argsObject = null): ShopifyCurrencyExchangeAdjustmentQueryObject
    {
        $object = new ShopifyCurrencyExchangeAdjustmentQueryObject("currencyExchangeAdjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Shopify Point of Sale device used to process the transaction.
     */
    public function selectDevice(?ShopifyOrderTransactionDeviceArgumentsObject $argsObject = null): ShopifyPointOfSaleDeviceQueryObject
    {
        $object = new ShopifyPointOfSaleDeviceQueryObject("device");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A standardized error code, independent of the payment provider.
     */
    public function selectErrorCode(): static
    {
        $this->selectField("errorCode");

        return $this;
    }

    /**
     * The transaction fees charged on the order transaction. Only present for Shopify Payments transactions.
     */
    public function selectFees(?ShopifyOrderTransactionFeesArgumentsObject $argsObject = null): ShopifyTransactionFeeQueryObject
    {
        $object = new ShopifyTransactionFeeQueryObject("fees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The human-readable payment gateway name used to process the transaction.
     */
    public function selectFormattedGateway(): static
    {
        $this->selectField("formattedGateway");

        return $this;
    }

    /**
     * The payment gateway used to process the transaction.
     */
    public function selectGateway(): static
    {
        $this->selectField("gateway");

        return $this;
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
     * The kind of transaction.
     */
    public function selectKind(): static
    {
        $this->selectField("kind");

        return $this;
    }

    /**
     * The physical location where the transaction was processed.
     */
    public function selectLocation(?ShopifyOrderTransactionLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the transaction is processed by manual payment gateway.
     */
    public function selectManualPaymentGateway(): static
    {
        $this->selectField("manualPaymentGateway");

        return $this;
    }

    /**
     * Whether the transaction can be manually captured.
     */
    public function selectManuallyCapturable(): static
    {
        $this->selectField("manuallyCapturable");

        return $this;
    }

    /**
     * Specifies the available amount to refund on the gateway.
     * This value is only available for transactions of type `SuggestedRefund`.
     *
     * @deprecated Use `maximumRefundableV2` instead.
     */
    public function selectMaximumRefundable(): static
    {
        $this->selectField("maximumRefundable");

        return $this;
    }

    /**
     * Specifies the available amount with currency to refund on the gateway.
     * This value is only available for transactions of type `SuggestedRefund`.
     */
    public function selectMaximumRefundableV2(?ShopifyOrderTransactionMaximumRefundableV2ArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("maximumRefundableV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the transaction can be captured multiple times.
     */
    public function selectMultiCapturable(): static
    {
        $this->selectField("multiCapturable");

        return $this;
    }

    /**
     * The associated order.
     */
    public function selectOrder(?ShopifyOrderTransactionOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The associated parent transaction, for example the authorization of a capture.
     */
    public function selectParentTransaction(?ShopifyOrderTransactionParentTransactionArgumentsObject $argsObject = null): ShopifyOrderTransactionQueryObject
    {
        $object = new ShopifyOrderTransactionQueryObject("parentTransaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The payment details for the transaction.
     */
    public function selectPaymentDetails(?ShopifyOrderTransactionPaymentDetailsArgumentsObject $argsObject = null): ShopifyPaymentDetailsUnionObject
    {
        $object = new ShopifyPaymentDetailsUnionObject("paymentDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The payment icon to display for the transaction.
     */
    public function selectPaymentIcon(?ShopifyOrderTransactionPaymentIconArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("paymentIcon");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The payment ID associated with the transaction.
     */
    public function selectPaymentId(): static
    {
        $this->selectField("paymentId");

        return $this;
    }

    /**
     * The payment method used for the transaction. This value is `null` if the payment method is unknown.
     *
     * @deprecated Use `paymentIcon` instead.
     */
    public function selectPaymentMethod(): static
    {
        $this->selectField("paymentMethod");

        return $this;
    }

    /**
     * Date and time when the transaction was processed.
     */
    public function selectProcessedAt(): static
    {
        $this->selectField("processedAt");

        return $this;
    }

    /**
     * The transaction receipt that the payment gateway attaches to the transaction.
     * > **Note:** This field is **gateway-specific** and **not a stable contract**.
     * > Its structure and contents can vary by payment gateway and may change without notice.
     * > Apps **shouldn't parse or rely on this field for business logic**; prefer typed fields on `OrderTransaction` and related objects.
     */
    public function selectReceiptJson(): static
    {
        $this->selectField("receiptJson");

        return $this;
    }

    /**
     * The settlement currency.
     */
    public function selectSettlementCurrency(): static
    {
        $this->selectField("settlementCurrency");

        return $this;
    }

    /**
     * The rate used when converting the transaction amount to settlement currency.
     */
    public function selectSettlementCurrencyRate(): static
    {
        $this->selectField("settlementCurrencyRate");

        return $this;
    }

    /**
     * Contains all Shopify Payments information related to an order transaction. This field is available only to stores on a Shopify Plus plan.
     */
    public function selectShopifyPaymentsSet(?ShopifyOrderTransactionShopifyPaymentsSetArgumentsObject $argsObject = null): ShopifyShopifyPaymentsTransactionSetQueryObject
    {
        $object = new ShopifyShopifyPaymentsTransactionSetQueryObject("shopifyPaymentsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of this transaction.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * Whether the transaction is a test transaction.
     */
    public function selectTest(): static
    {
        $this->selectField("test");

        return $this;
    }

    /**
     * The amount of the original authorization that remains unsettled.
     * During a pending capture, this reflects the full outstanding balance including the pending amount.
     * When no capture is pending, this equals the capturable amount.
     * Only available when an amount is capturable or manually marked as paid.
     *
     * @deprecated Use `totalUnsettledSet` instead.
     */
    public function selectTotalUnsettled(): static
    {
        $this->selectField("totalUnsettled");

        return $this;
    }

    /**
     * The amount of the original authorization that remains unsettled, in shop and presentment currencies.
     * During a pending capture, this reflects the full outstanding balance including the pending amount.
     * When no capture is pending, this equals the capturable amount.
     * Only available when an amount is capturable or manually marked as paid.
     */
    public function selectTotalUnsettledSet(?ShopifyOrderTransactionTotalUnsettledSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalUnsettledSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount with currency of the original authorization that remains unsettled.
     * During a pending capture, this reflects the full outstanding balance including the pending amount.
     * When no capture is pending, this equals the capturable amount.
     * Only available when an amount is capturable or manually marked as paid.
     *
     * @deprecated Use `totalUnsettledSet` instead.
     */
    public function selectTotalUnsettledV2(?ShopifyOrderTransactionTotalUnsettledV2ArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalUnsettledV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Staff member who was logged into the Shopify POS device when the transaction was processed.
     */
    public function selectUser(?ShopifyOrderTransactionUserArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("user");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
