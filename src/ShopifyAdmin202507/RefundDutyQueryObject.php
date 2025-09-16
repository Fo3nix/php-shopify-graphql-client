<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class RefundDutyQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundDuty";

    public function selectAmountSet(RefundDutyAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalDuty(RefundDutyOriginalDutyArgumentsObject $argsObject = null)
    {
        $object = new DutyQueryObject("originalDuty");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
