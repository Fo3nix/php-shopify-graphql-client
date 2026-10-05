<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShippingRefundQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingRefund";

    /**
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmount()
    {
        $this->selectField("amount");

        return $this;
    }

    public function selectAmountSet(ShopifyShippingRefundAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
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

    public function selectMaximumRefundableSet(ShopifyShippingRefundMaximumRefundableSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("maximumRefundableSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `taxSet` instead.
     */
    public function selectTax()
    {
        $this->selectField("tax");

        return $this;
    }

    public function selectTaxSet(ShopifyShippingRefundTaxSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("taxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
