<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsDisputeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDispute";

    public function selectAmount(ShopifyShopifyPaymentsDisputeAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisputeEvidence(ShopifyShopifyPaymentsDisputeDisputeEvidenceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeEvidenceQueryObject("disputeEvidence");
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

    public function selectOrder(ShopifyShopifyPaymentsDisputeOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReasonDetails(ShopifyShopifyPaymentsDisputeReasonDetailsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeReasonDetailsQueryObject("reasonDetails");
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
