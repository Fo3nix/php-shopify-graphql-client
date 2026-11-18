<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An exchange where existing items on an order are returned and new items are added to the order.
 */
class ShopifyExchangeV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2";

    /**
     * The details of the new items in the exchange.
     */
    public function selectAdditions(?ShopifyExchangeV2AdditionsArgumentsObject $argsObject = null): ShopifyExchangeV2AdditionsQueryObject
    {
        $object = new ShopifyExchangeV2AdditionsQueryObject("additions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the exchange was completed.
     */
    public function selectCompletedAt(): static
    {
        $this->selectField("completedAt");

        return $this;
    }

    /**
     * The date and time when the exchange was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

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
     * The location where the exchange happened.
     */
    public function selectLocation(?ShopifyExchangeV2LocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Mirrored from Admin Exchanges.
     */
    public function selectMirrored(): static
    {
        $this->selectField("mirrored");

        return $this;
    }

    /**
     * The text of an optional note that a shop owner can attach to the exchange.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The refunds processed during the exchange.
     */
    public function selectRefunds(?ShopifyExchangeV2RefundsArgumentsObject $argsObject = null): ShopifyRefundQueryObject
    {
        $object = new ShopifyRefundQueryObject("refunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The details of the returned items in the exchange.
     */
    public function selectReturns(?ShopifyExchangeV2ReturnsArgumentsObject $argsObject = null): ShopifyExchangeV2ReturnsQueryObject
    {
        $object = new ShopifyExchangeV2ReturnsQueryObject("returns");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The staff member associated with the exchange.
     */
    public function selectStaffMember(?ShopifyExchangeV2StaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount of money that was paid or refunded as part of the exchange.
     */
    public function selectTotalAmountProcessedSet(?ShopifyExchangeV2TotalAmountProcessedSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalAmountProcessedSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The difference in values of the items that were exchanged.
     */
    public function selectTotalPriceSet(?ShopifyExchangeV2TotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order transactions related to the exchange.
     */
    public function selectTransactions(?ShopifyExchangeV2TransactionsArgumentsObject $argsObject = null): ShopifyOrderTransactionQueryObject
    {
        $object = new ShopifyOrderTransactionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
