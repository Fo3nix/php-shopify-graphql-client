<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashTrackingAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingAdjustment";

    public function selectCash(ShopifyCashTrackingAdjustmentCashArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("cash");
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

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectStaffMember(ShopifyCashTrackingAdjustmentStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTime()
    {
        $this->selectField("time");

        return $this;
    }
}
