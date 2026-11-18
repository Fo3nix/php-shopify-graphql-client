<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationSubscriptionContractProductChangeArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["subscriptionContractId", "lineId", "input"];

    protected $actor;
    protected $subscriptionContractId;
    protected $lineId;
    protected $input;

    /**
     * The actor who initiated a subscription action.
     */
    public function setActor($shopifySubscriptionActor): static
    {
        $this->actor = new RawObject($shopifySubscriptionActor);

        return $this;
    }

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
