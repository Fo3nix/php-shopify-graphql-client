<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionContractProductChangeArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["subscriptionContractId", "lineId", "input"];

    protected $subscriptionContractId;
    protected $lineId;
    protected $input;

    /**
     * The ID of the subscription contract.
     */
    public function setSubscriptionContractId($subscriptionContractId): static
    {
        $this->subscriptionContractId = $subscriptionContractId;

        return $this;
    }

    /**
     * The gid of the Subscription Line to update.
     */
    public function setLineId($lineId): static
    {
        $this->lineId = $lineId;

        return $this;
    }

    /**
     * The properties of the Product changes.
     */
    public function setInput(ShopifySubscriptionContractProductChangeInputInputObject $shopifySubscriptionContractProductChangeInputInputObject): static
    {
        $this->input = $shopifySubscriptionContractProductChangeInputInputObject;

        return $this;
    }
}
