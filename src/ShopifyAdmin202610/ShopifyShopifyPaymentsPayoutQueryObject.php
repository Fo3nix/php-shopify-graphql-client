<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A transfer of funds between a merchant's Shopify Payments balance and their [`ShopifyPaymentsBankAccount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsBankAccount). Provides the [net amount](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayout#field-ShopifyPaymentsPayout.fields.net), [issue date](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayout#field-ShopifyPaymentsPayout.fields.issuedAt), and current [`ShopifyPaymentsPayoutStatus`](https://shopify.dev/docs/api/admin-graphql/latest/enums/ShopifyPaymentsPayoutStatus).
 *
 * The payout includes a [`ShopifyPaymentsPayoutSummary`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayoutSummary) that breaks down fees and gross amounts by transaction type, such as charges, refunds, and adjustments. The [`ShopifyPaymentsPayoutTransactionType`](https://shopify.dev/docs/api/admin-graphql/latest/enums/ShopifyPaymentsPayoutTransactionType) indicates whether funds move into the bank account (deposit) or back to Shopify Payments (withdrawal).
 */
class ShopifyShopifyPaymentsPayoutQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsPayout";

    /**
     * The bank account for the payout.
     *
     * @deprecated Use `destinationAccount` instead.
     */
    public function selectBankAccount(?ShopifyShopifyPaymentsPayoutBankAccountArgumentsObject $argsObject = null): ShopifyShopifyPaymentsBankAccountQueryObject
    {
        $object = new ShopifyShopifyPaymentsBankAccountQueryObject("bankAccount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The business entity associated with the payout.
     */
    public function selectBusinessEntity(?ShopifyShopifyPaymentsPayoutBusinessEntityArgumentsObject $argsObject = null): ShopifyBusinessEntityQueryObject
    {
        $object = new ShopifyBusinessEntityQueryObject("businessEntity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A unique trace ID from the financial institution. Use this reference number to track the payout with your provider.
     */
    public function selectExternalTraceId(): static
    {
        $this->selectField("externalTraceId");

        return $this;
    }

    /**
     * The total amount and currency of the payout.
     *
     * @deprecated Use `net` instead.
     */
    public function selectGross(?ShopifyShopifyPaymentsPayoutGrossArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("gross");
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
     * The exact time when the payout was issued. The payout only contains
     * balance transactions that were available at this time.
     */
    public function selectIssuedAt(): static
    {
        $this->selectField("issuedAt");

        return $this;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * The total amount and currency of the payout.
     */
    public function selectNet(?ShopifyShopifyPaymentsPayoutNetArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("net");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The transfer status of the payout.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The summary of the payout.
     */
    public function selectSummary(?ShopifyShopifyPaymentsPayoutSummaryArgumentsObject $argsObject = null): ShopifyShopifyPaymentsPayoutSummaryQueryObject
    {
        $object = new ShopifyShopifyPaymentsPayoutSummaryQueryObject("summary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The direction of the payout.
     */
    public function selectTransactionType(): static
    {
        $this->selectField("transactionType");

        return $this;
    }
}
