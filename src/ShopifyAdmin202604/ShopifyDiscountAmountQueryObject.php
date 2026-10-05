<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountAmountQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAmount";

    public function selectAmount(ShopifyDiscountAmountAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppliesOnEachItem()
    {
        $this->selectField("appliesOnEachItem");

        return $this;
    }
}
