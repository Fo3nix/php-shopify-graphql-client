<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationSubscriptionBillingCycleChargeArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["subscriptionContractId", "billingCycleSelector"];

    protected $subscriptionContractId;
    protected $billingCycleSelector;
    protected $inventoryPolicy;

    /**
     * The ID of the subscription contract.
     */
    public function setSubscriptionContractId($subscriptionContractId): static
    {
        $this->subscriptionContractId = $subscriptionContractId;

        return $this;
    }

    /**
     * Select the specific billing cycle to be billed.
     * If the selected billing cycle's [billingAttemptExpectedDate](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionBillingCycle#field-subscriptionbillingcycle-billingattemptexpecteddate) is in the past, the [originTime](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionBillingAttempt#field-subscriptionbillingattempt-origintime) of the billing attempt will be set to this date. However, if the [billingAttemptExpectedDate](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionBillingCycle#field-subscriptionbillingcycle-billingattemptexpecteddate) is in the future, the originTime will be the current time.
     */
    public function setBillingCycleSelector(ShopifySubscriptionBillingCycleSelectorInputObject $shopifySubscriptionBillingCycleSelectorInputObject): static
    {
        $this->billingCycleSelector = $shopifySubscriptionBillingCycleSelectorInputObject;

        return $this;
    }

    /**
     * The behaviour to use when updating inventory.
     */
    public function setInventoryPolicy($shopifySubscriptionBillingAttemptInventoryPolicy): static
    {
        $this->inventoryPolicy = new RawObject($shopifySubscriptionBillingAttemptInventoryPolicy);

        return $this;
    }
}
