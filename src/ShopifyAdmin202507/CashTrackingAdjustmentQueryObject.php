<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CashTrackingAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingAdjustment";

    public function selectCash(CashTrackingAdjustmentCashArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("cash");
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

    public function selectStaffMember(CashTrackingAdjustmentStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("staffMember");
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
