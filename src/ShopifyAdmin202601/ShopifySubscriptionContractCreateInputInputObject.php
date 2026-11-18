<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create a Subscription Contract.
 */
class ShopifySubscriptionContractCreateInputInputObject extends InputObject
{
    const REQUIRED = ["customerId", "nextBillingDate", "currencyCode", "contract"];

    protected $customerId;
    protected $nextBillingDate;
    protected $currencyCode;
    protected $contract;

    /**
     * The ID of the customer to associate with the subscription contract.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The next billing date for the subscription contract.
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
}
