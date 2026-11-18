<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Tracks an adjustment to the cash in a cash tracking session for a point of sale device over the course of a shift.
 */
class ShopifyCashTrackingAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingAdjustment";

    /**
     * The amount of cash being added or removed.
     */
    public function selectCash(?ShopifyCashTrackingAdjustmentCashArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("cash");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The note entered when the adjustment was made.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The staff member who made the adjustment.
     */
    public function selectStaffMember(?ShopifyCashTrackingAdjustmentStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The time when the adjustment was made.
     */
    public function selectTime(): static
    {
        $this->selectField("time");

        return $this;
    }
}
