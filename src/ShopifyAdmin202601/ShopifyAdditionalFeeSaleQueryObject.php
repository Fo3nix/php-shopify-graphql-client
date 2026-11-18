<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A sale associated with an additional fee charge.
 */
class ShopifyAdditionalFeeSaleQueryObject extends QueryObject
{
    const OBJECT_NAME = "AdditionalFeeSale";

    /**
     * The type of order action that the sale represents.
     */
    public function selectActionType(): static
    {
        $this->selectField("actionType");

        return $this;
    }

    /**
     * The additional fees for the associated sale.
     */
    public function selectAdditionalFee(?ShopifyAdditionalFeeSaleAdditionalFeeArgumentsObject $argsObject = null): ShopifySaleAdditionalFeeQueryObject
    {
        $object = new ShopifySaleAdditionalFeeQueryObject("additionalFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
    public function selectTaxes(?ShopifyAdditionalFeeSaleTaxesArgumentsObject $argsObject = null): ShopifySaleTaxQueryObject
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
    public function selectTotalAmount(?ShopifyAdditionalFeeSaleTotalAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalDiscountAmountAfterTaxes(?ShopifyAdditionalFeeSaleTotalDiscountAmountAfterTaxesArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalDiscountAmountBeforeTaxes(?ShopifyAdditionalFeeSaleTotalDiscountAmountBeforeTaxesArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalTaxAmount(?ShopifyAdditionalFeeSaleTotalTaxAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
