<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDisputeEvidenceUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the dispute evidence to be updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The updated properties for a dispute evidence.
     */
    public function setInput(ShopifyShopifyPaymentsDisputeEvidenceUpdateInputInputObject $shopifyShopifyPaymentsDisputeEvidenceUpdateInputInputObject): static
    {
        $this->input = $shopifyShopifyPaymentsDisputeEvidenceUpdateInputInputObject;

        return $this;
    }
}
