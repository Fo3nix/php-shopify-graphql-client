<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Transaction fee related to an order transaction.
 */
class ShopifyTransactionFeeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TransactionFee";

    /**
     * Amount of the fee.
     */
    public function selectAmount(?ShopifyTransactionFeeAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the transaction fee was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Flat rate charge for a transaction.
     */
    public function selectFlatFee(?ShopifyTransactionFeeFlatFeeArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("flatFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Name of the credit card flat fee.
     */
    public function selectFlatFeeName(): static
    {
        $this->selectField("flatFeeName");

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
     * Percentage charge.
     */
    public function selectRate(): static
    {
        $this->selectField("rate");

        return $this;
    }

    /**
     * Name of the credit card rate.
     */
    public function selectRateName(): static
    {
        $this->selectField("rateName");

        return $this;
    }

    /**
     * Tax amount charged on the fee.
     */
    public function selectTaxAmount(?ShopifyTransactionFeeTaxAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("taxAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Name of the type of fee.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }
}
