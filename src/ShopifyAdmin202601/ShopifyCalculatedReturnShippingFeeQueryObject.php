<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCalculatedReturnShippingFeeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedReturnShippingFee";

    public function selectAmountSet(ShopifyCalculatedReturnShippingFeeAmountSetArgumentsObject $argsObject = null)
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
}
