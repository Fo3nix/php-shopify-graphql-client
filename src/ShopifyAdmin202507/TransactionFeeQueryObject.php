<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TransactionFeeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TransactionFee";

    public function selectAmount(TransactionFeeAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFlatFee(TransactionFeeFlatFeeArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("flatFee");
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

    public function selectTaxAmount(TransactionFeeTaxAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("taxAmount");
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
