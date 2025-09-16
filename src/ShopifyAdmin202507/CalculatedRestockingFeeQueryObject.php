<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CalculatedRestockingFeeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedRestockingFee";

    public function selectAmountSet(CalculatedRestockingFeeAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectPercentage()
    {
        $this->selectField("percentage");

        return $this;
    }
}
