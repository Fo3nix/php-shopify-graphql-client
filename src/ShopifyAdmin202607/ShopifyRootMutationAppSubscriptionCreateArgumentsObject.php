<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationAppSubscriptionCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["name", "lineItems", "returnUrl"];

    protected $name;
    protected $lineItems;
    protected $test;
    protected $trialDays;
    protected $returnUrl;
    protected $replacementBehavior;

    /**
     * A descriptive name for the app subscription.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Attaches one or more pricing plans to an app subscription. Only one pricing plan can be defined for each available type.
     */
    public function setLineItems(array $lineItems): static
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * Whether the app subscription is a test transaction.
     */
    public function setTest($test): static
    {
        $this->test = $test;

        return $this;
    }

    /**
     * The number of days of the free trial period, beginning on the day that the merchant approves the app charges.
     */
    public function setTrialDays($trialDays): static
    {
        $this->trialDays = $trialDays;

        return $this;
    }

    /**
     * The URL pointing to the page where the merchant is redirected after approving the app subscription.
     */
    public function setReturnUrl($returnUrl): static
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    /**
     * The replacement behavior when creating an app subscription for a merchant with an already existing app subscription.
     */
    public function setReplacementBehavior($shopifyAppSubscriptionReplacementBehavior): static
    {
        $this->replacementBehavior = new RawObject($shopifyAppSubscriptionReplacementBehavior);

        return $this;
    }
}
