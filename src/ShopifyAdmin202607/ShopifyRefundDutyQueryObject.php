<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a refunded duty.
 */
class ShopifyRefundDutyQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundDuty";

    /**
     * The amount of a refunded duty in shop and presentment currencies.
     */
    public function selectAmountSet(?ShopifyRefundDutyAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The duty associated with this refunded duty.
     */
    public function selectOriginalDuty(?ShopifyRefundDutyOriginalDutyArgumentsObject $argsObject = null): ShopifyDutyQueryObject
    {
        $object = new ShopifyDutyQueryObject("originalDuty");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
