<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `disputeEvidenceUpdate` mutation.
 */
class ShopifyDisputeEvidenceUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DisputeEvidenceUpdatePayload";

    /**
     * The updated dispute evidence.
     */
    public function selectDisputeEvidence(?ShopifyDisputeEvidenceUpdatePayloadDisputeEvidenceArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeEvidenceQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeEvidenceQueryObject("disputeEvidence");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDisputeEvidenceUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDisputeEvidenceUpdateUserErrorQueryObject
    {
        $object = new ShopifyDisputeEvidenceUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
