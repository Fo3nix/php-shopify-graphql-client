<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a remote Authorize.net customer payment profile.
 */
class ShopifyRemoteAuthorizeNetCustomerPaymentProfileInputInputObject extends InputObject
{
    const REQUIRED = ["customerProfileId"];

    protected $customerProfileId;
    protected $customerPaymentProfileId;

    /**
     * The customerProfileId value from the Authorize.net API.
     */
    public function setCustomerProfileId($customerProfileId): static
    {
        $this->customerProfileId = $customerProfileId;

        return $this;
    }

    /**
     * The customerPaymentProfileId value from the Authorize.net API. Starting on 2025,
     * customer_payment_profile_id will become mandatory for all API versions.
     */
    public function setCustomerPaymentProfileId($customerPaymentProfileId): static
    {
        $this->customerPaymentProfileId = $customerPaymentProfileId;

        return $this;
    }
}
