<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySuggestedRefundQueryObject extends QueryObject
{
    const OBJECT_NAME = "SuggestedRefund";

    /**
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmount()
    {
        $this->selectField("amount");

        return $this;
    }

    public function selectAmountSet(ShopifySuggestedRefundAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedSubtotalSet(ShopifySuggestedRefundDiscountedSubtotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedSubtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `maximumRefundableSet` instead.
     */
    public function selectMaximumRefundable()
    {
        $this->selectField("maximumRefundable");

        return $this;
    }

    public function selectMaximumRefundableSet(ShopifySuggestedRefundMaximumRefundableSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("maximumRefundableSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundDuties(ShopifySuggestedRefundRefundDutiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundDutyQueryObject("refundDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundLineItems(ShopifySuggestedRefundRefundLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundLineItemQueryObject("refundLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShipping(ShopifySuggestedRefundShippingArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShippingRefundQueryObject("shipping");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `subtotalSet` instead.
     */
    public function selectSubtotal()
    {
        $this->selectField("subtotal");

        return $this;
    }

    public function selectSubtotalSet(ShopifySuggestedRefundSubtotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSuggestedTransactions(ShopifySuggestedRefundSuggestedTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySuggestedOrderTransactionQueryObject("suggestedTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCartDiscountAmountSet(ShopifySuggestedRefundTotalCartDiscountAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalCartDiscountAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDutiesSet(ShopifySuggestedRefundTotalDutiesSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalDutiesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTaxSet(ShopifySuggestedRefundTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalTaxSet` instead.
     */
    public function selectTotalTaxes()
    {
        $this->selectField("totalTaxes");

        return $this;
    }
}
