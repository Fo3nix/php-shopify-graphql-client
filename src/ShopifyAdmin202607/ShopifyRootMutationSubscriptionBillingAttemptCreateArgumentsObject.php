<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionBillingAttemptCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["subscriptionContractId", "subscriptionBillingAttemptInput"];

    protected $subscriptionContractId;
    protected $subscriptionBillingAttemptInput;

    /**
     * The ID of the subscription contract.
     */
    public function setSubscriptionContractId($subscriptionContractId): static
    {
        $this->subscriptionContractId = $subscriptionContractId;

        return $this;
    }

    /**
     * The information to apply as a billing attempt.
     */
    public function setSubscriptionBillingAttemptInput(ShopifySubscriptionBillingAttemptInputInputObject $shopifySubscriptionBillingAttemptInputInputObject): static
    {
        $this->subscriptionBillingAttemptInput = $shopifySubscriptionBillingAttemptInputInputObject;

        return $this;
    }
}
