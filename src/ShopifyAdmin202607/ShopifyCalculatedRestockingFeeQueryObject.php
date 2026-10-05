<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCalculatedRestockingFeeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedRestockingFee";

    public function selectAmountSet(ShopifyCalculatedRestockingFeeAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
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
