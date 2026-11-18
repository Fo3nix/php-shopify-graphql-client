<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A sale associated with a tip.
 */
class ShopifyTipSaleQueryObject extends QueryObject
{
    const OBJECT_NAME = "TipSale";

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
     * The line item for the associated sale.
     */
    public function selectLineItem(?ShopifyTipSaleLineItemArgumentsObject $argsObject = null): ShopifyLineItemQueryObject
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
    public function selectTaxes(?ShopifyTipSaleTaxesArgumentsObject $argsObject = null): ShopifySaleTaxQueryObject
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
    public function selectTotalAmount(?ShopifyTipSaleTotalAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalDiscountAmountAfterTaxes(?ShopifyTipSaleTotalDiscountAmountAfterTaxesArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalDiscountAmountBeforeTaxes(?ShopifyTipSaleTotalDiscountAmountBeforeTaxesArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalTaxAmount(?ShopifyTipSaleTotalTaxAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
