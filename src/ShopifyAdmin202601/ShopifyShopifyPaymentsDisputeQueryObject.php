<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A dispute occurs when a buyer questions the legitimacy of a charge with their financial institution.
 */
class ShopifyShopifyPaymentsDisputeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDispute";

    /**
     * The total amount disputed by the cardholder.
     */
    public function selectAmount(?ShopifyShopifyPaymentsDisputeAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The evidence associated with the dispute.
     */
    public function selectDisputeEvidence(?ShopifyShopifyPaymentsDisputeDisputeEvidenceArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeEvidenceQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeEvidenceQueryObject("disputeEvidence");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The deadline for evidence submission.
     */
    public function selectEvidenceDueBy(): static
    {
        $this->selectField("evidenceDueBy");

        return $this;
    }

    /**
     * The date when evidence was sent. Returns null if evidence hasn't yet been sent.
     */
    public function selectEvidenceSentOn(): static
    {
        $this->selectField("evidenceSentOn");

        return $this;
    }

    /**
     * The date when this dispute was resolved. Returns null if the dispute isn't yet resolved.
     */
    public function selectFinalizedOn(): static
    {
        $this->selectField("finalizedOn");

        return $this;
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
     * The date when this dispute was initiated.
     */
    public function selectInitiatedAt(): static
    {
        $this->selectField("initiatedAt");

        return $this;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * The order that contains the charge that's under dispute.
     */
    public function selectOrder(?ShopifyShopifyPaymentsDisputeOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The reason of the dispute.
     */
    public function selectReasonDetails(?ShopifyShopifyPaymentsDisputeReasonDetailsArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeReasonDetailsQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeReasonDetailsQueryObject("reasonDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The current state of the dispute.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * Indicates if this dispute is still in the inquiry phase or has turned into a chargeback.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }
}
