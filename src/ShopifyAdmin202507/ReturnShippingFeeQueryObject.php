<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReturnShippingFeeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnShippingFee";

    public function selectAmountSet(ReturnShippingFeeAmountSetArgumentsObject $argsObject = null)
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
}
