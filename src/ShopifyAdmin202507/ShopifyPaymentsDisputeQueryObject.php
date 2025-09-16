<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsDisputeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDispute";

    public function selectAmount(ShopifyPaymentsDisputeAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEvidenceDueBy()
    {
        $this->selectField("evidenceDueBy");

        return $this;
    }

    public function selectEvidenceSentOn()
    {
        $this->selectField("evidenceSentOn");

        return $this;
    }

    public function selectFinalizedOn()
    {
        $this->selectField("finalizedOn");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInitiatedAt()
    {
        $this->selectField("initiatedAt");

        return $this;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectOrder(ShopifyPaymentsDisputeOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReasonDetails(ShopifyPaymentsDisputeReasonDetailsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeReasonDetailsQueryObject("reasonDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
