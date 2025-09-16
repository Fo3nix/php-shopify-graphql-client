<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SuggestedRefundQueryObject extends QueryObject
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

    public function selectAmountSet(SuggestedRefundAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedSubtotalSet(SuggestedRefundDiscountedSubtotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedSubtotalSet");
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

    public function selectMaximumRefundableSet(SuggestedRefundMaximumRefundableSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("maximumRefundableSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundDuties(SuggestedRefundRefundDutiesArgumentsObject $argsObject = null)
    {
        $object = new RefundDutyQueryObject("refundDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundLineItems(SuggestedRefundRefundLineItemsArgumentsObject $argsObject = null)
    {
        $object = new RefundLineItemQueryObject("refundLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShipping(SuggestedRefundShippingArgumentsObject $argsObject = null)
    {
        $object = new ShippingRefundQueryObject("shipping");
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

    public function selectSubtotalSet(SuggestedRefundSubtotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("subtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSuggestedTransactions(SuggestedRefundSuggestedTransactionsArgumentsObject $argsObject = null)
    {
        $object = new SuggestedOrderTransactionQueryObject("suggestedTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCartDiscountAmountSet(SuggestedRefundTotalCartDiscountAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalCartDiscountAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDutiesSet(SuggestedRefundTotalDutiesSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalDutiesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTaxSet(SuggestedRefundTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalTaxSet");
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
