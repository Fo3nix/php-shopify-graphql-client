<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create a Subscription Contract.
 */
class ShopifySubscriptionContractAtomicCreateInputInputObject extends InputObject
{
    const REQUIRED = ["customerId", "nextBillingDate", "currencyCode", "contract", "lines"];

    protected $actor;
    protected $customerId;
    protected $nextBillingDate;
    protected $currencyCode;
    protected $contract;
    protected $lines;
    protected $discountCodes;

    /**
     * The actor who initiated a subscription action.
     */
    public function setActor($shopifySubscriptionActor): static
    {
        $this->actor = new RawObject($shopifySubscriptionActor);

        return $this;
    }

    /**
     * The ID of the customer to associate with the subscription contract.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The next billing date for the subscription contract.This field is independent of billing cycles.It stores metadata set by the apps, and thus not managed by Shopify.It can be queried from subscriptionContract.nextBillingDate.
     */
    public function setNextBillingDate($nextBillingDate): static
    {
        $this->nextBillingDate = $nextBillingDate;

        return $this;
    }

    /**
     * The currency used for the subscription contract.
     */
    public function setCurrencyCode($shopifyCurrencyCode): static
    {
        $this->currencyCode = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * The attributes used as input for the Subscription Draft.
     */
    public function setContract(ShopifySubscriptionDraftInputInputObject $shopifySubscriptionDraftInputInputObject): static
    {
        $this->contract = $shopifySubscriptionDraftInputInputObject;

        return $this;
    }

    /**
     * A list of new Subscription Lines.
     */
    public function setLines(array $lines): static
    {
        $this->lines = $lines;

        return $this;
    }

    /**
     * A list of discount redeem codes to apply to the subscription contract.
     */
    public function setDiscountCodes(array $discountCodes): static
    {
        $this->discountCodes = $discountCodes;

        return $this;
    }
}
