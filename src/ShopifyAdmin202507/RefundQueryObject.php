<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class RefundQueryObject extends QueryObject
{
    const OBJECT_NAME = "Refund";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDuties(RefundDutiesArgumentsObject $argsObject = null)
    {
        $object = new RefundDutyQueryObject("duties");
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

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectOrder(RefundOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderAdjustments(RefundOrderAdjustmentsArgumentsObject $argsObject = null)
    {
        $object = new OrderAdjustmentConnectionQueryObject("orderAdjustments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundLineItems(RefundRefundLineItemsArgumentsObject $argsObject = null)
    {
        $object = new RefundLineItemConnectionQueryObject("refundLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundShippingLines(RefundRefundShippingLinesArgumentsObject $argsObject = null)
    {
        $object = new RefundShippingLineConnectionQueryObject("refundShippingLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturn(RefundReturnArgumentsObject $argsObject = null)
    {
        $object = new ReturnQueryObject("return");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStaffMember(RefundStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalRefundedSet` instead.
     */
    public function selectTotalRefunded(RefundTotalRefundedArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalRefunded");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalRefundedSet(RefundTotalRefundedSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalRefundedSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTransactions(RefundTransactionsArgumentsObject $argsObject = null)
    {
        $object = new OrderTransactionConnectionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
