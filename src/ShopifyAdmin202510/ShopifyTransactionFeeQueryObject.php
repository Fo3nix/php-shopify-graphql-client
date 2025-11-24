<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTransactionFeeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TransactionFee";

    public function selectAmount(ShopifyTransactionFeeAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFlatFee(ShopifyTransactionFeeFlatFeeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("flatFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFlatFeeName()
    {
        $this->selectField("flatFeeName");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectRate()
    {
        $this->selectField("rate");

        return $this;
    }

    public function selectRateName()
    {
        $this->selectField("rateName");

        return $this;
    }

    public function selectTaxAmount(ShopifyTransactionFeeTaxAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("taxAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
