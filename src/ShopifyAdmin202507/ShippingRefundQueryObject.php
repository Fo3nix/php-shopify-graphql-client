<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShippingRefundQueryObject extends QueryObject
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

    public function selectAmountSet(ShippingRefundAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("amountSet");
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

    public function selectMaximumRefundableSet(ShippingRefundMaximumRefundableSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("maximumRefundableSet");
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

    public function selectTaxSet(ShippingRefundTaxSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("taxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
