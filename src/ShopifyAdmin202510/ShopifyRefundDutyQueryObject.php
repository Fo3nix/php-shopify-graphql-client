<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRefundDutyQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundDuty";

    public function selectAmountSet(ShopifyRefundDutyAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalDuty(ShopifyRefundDutyOriginalDutyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDutyQueryObject("originalDuty");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
