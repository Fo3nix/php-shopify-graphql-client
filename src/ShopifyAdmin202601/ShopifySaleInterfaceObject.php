<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * An individual sale record associated with a sales agreement. Every money value in an order's sales data is represented in the currency's smallest unit. When amounts are divided across multiple line items, such as taxes or order discounts, the amounts might not divide evenly across all of the line items on the order. To address this, the remaining currency units that couldn't be divided evenly are allocated one at a time, starting with the first line item, until they are all accounted for. In aggregate, the values sum up correctly. In isolation, one line item might have a different tax or discount amount than another line item of the same price, before taxes and discounts. This is because the amount could not be divided evenly across the items. The allocation of currency units across line items is immutable. After they are allocated, currency units are never reallocated or redistributed among the line items.
 */
class ShopifySaleInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "Sale";

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
    public function selectTaxes(?ShopifySaleTaxesArgumentsObject $argsObject = null): ShopifySaleTaxQueryObject
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
    public function selectTotalAmount(?ShopifySaleTotalAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalDiscountAmountAfterTaxes(?ShopifySaleTotalDiscountAmountAfterTaxesArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalDiscountAmountBeforeTaxes(?ShopifySaleTotalDiscountAmountBeforeTaxesArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalTaxAmount(?ShopifySaleTotalTaxAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onAdditionalFeeSale(): ShopifyAdditionalFeeSaleQueryObject
    {
        $object = new ShopifyAdditionalFeeSaleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAdjustmentSale(): ShopifyAdjustmentSaleQueryObject
    {
        $object = new ShopifyAdjustmentSaleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDutySale(): ShopifyDutySaleQueryObject
    {
        $object = new ShopifyDutySaleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFeeSale(): ShopifyFeeSaleQueryObject
    {
        $object = new ShopifyFeeSaleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardSale(): ShopifyGiftCardSaleQueryObject
    {
        $object = new ShopifyGiftCardSaleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductSale(): ShopifyProductSaleQueryObject
    {
        $object = new ShopifyProductSaleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShippingLineSale(): ShopifyShippingLineSaleQueryObject
    {
        $object = new ShopifyShippingLineSaleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTipSale(): ShopifyTipSaleQueryObject
    {
        $object = new ShopifyTipSaleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onUnknownSale(): ShopifyUnknownSaleQueryObject
    {
        $object = new ShopifyUnknownSaleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
