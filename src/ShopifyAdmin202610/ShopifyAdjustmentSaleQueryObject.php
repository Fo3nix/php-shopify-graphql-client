<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A sale associated with an order price adjustment.
 */
class ShopifyAdjustmentSaleQueryObject extends QueryObject
{
    const OBJECT_NAME = "AdjustmentSale";

    /**
     * The type of order action that the sale represents.
     */
    public function selectActionType(): static
    {
        $this->selectField("actionType");

        return $this;
    }

    /**
     * The unique ID for the sale.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The line type associated with the sale.
     */
    public function selectLineType(): static
    {
        $this->selectField("lineType");

        return $this;
    }

    /**
     * The number of units either ordered or intended to be returned.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * All individual taxes associated with the sale.
     */
    public function selectTaxes(?ShopifyAdjustmentSaleTaxesArgumentsObject $argsObject = null): ShopifySaleTaxQueryObject
    {
        $object = new ShopifySaleTaxQueryObject("taxes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total sale amount after taxes and discounts.
     */
    public function selectTotalAmount(?ShopifyAdjustmentSaleTotalAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total discounts allocated to the sale after taxes.
     */
    public function selectTotalDiscountAmountAfterTaxes(?ShopifyAdjustmentSaleTotalDiscountAmountAfterTaxesArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalDiscountAmountAfterTaxes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total discounts allocated to the sale before taxes.
     */
    public function selectTotalDiscountAmountBeforeTaxes(?ShopifyAdjustmentSaleTotalDiscountAmountBeforeTaxesArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalDiscountAmountBeforeTaxes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount of taxes for the sale.
     */
    public function selectTotalTaxAmount(?ShopifyAdjustmentSaleTotalTaxAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
