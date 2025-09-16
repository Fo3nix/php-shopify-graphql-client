<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAdjustment";

    public function selectAmountSet(OrderAdjustmentAmountSetArgumentsObject $argsObject = null)
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

    public function selectReason()
    {
        $this->selectField("reason");

        return $this;
    }

    public function selectTaxAmountSet(OrderAdjustmentTaxAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("taxAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
