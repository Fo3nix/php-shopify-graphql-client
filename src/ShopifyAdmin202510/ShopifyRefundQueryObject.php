<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRefundQueryObject extends QueryObject
{
    const OBJECT_NAME = "Refund";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDuties(ShopifyRefundDutiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundDutyQueryObject("duties");
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

    public function selectOrder(ShopifyRefundOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderAdjustments(ShopifyRefundOrderAdjustmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderAdjustmentConnectionQueryObject("orderAdjustments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundLineItems(ShopifyRefundRefundLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundLineItemConnectionQueryObject("refundLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundShippingLines(ShopifyRefundRefundShippingLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundShippingLineConnectionQueryObject("refundShippingLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturn(ShopifyRefundReturnArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnQueryObject("return");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStaffMember(ShopifyRefundStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalRefundedSet` instead.
     */
    public function selectTotalRefunded(ShopifyRefundTotalRefundedArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalRefunded");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalRefundedSet(ShopifyRefundTotalRefundedSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalRefundedSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTransactions(ShopifyRefundTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderTransactionConnectionQueryObject("transactions");
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
