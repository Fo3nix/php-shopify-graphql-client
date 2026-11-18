<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields that set access permissions for the definition's metafields.
 */
class ShopifyMetafieldAccessInputInputObject extends InputObject
{
    protected $admin;
    protected $storefront;
    protected $customerAccount;

    /**
     * The access permitted on the Admin API.
     */
    public function setAdmin($shopifyMetafieldAdminAccessInput): static
    {
        $this->admin = new RawObject($shopifyMetafieldAdminAccessInput);

        return $this;
    }

    /**
     * The access permitted on the Storefront API.
     */
    public function setStorefront($shopifyMetafieldStorefrontAccessInput): static
    {
        $this->storefront = new RawObject($shopifyMetafieldStorefrontAccessInput);

        return $this;
    }

    /**
     * The access permitted on the Customer Account API.
     */
    public function setCustomerAccount($shopifyMetafieldCustomerAccountAccessInput): static
    {
        $this->customerAccount = new RawObject($shopifyMetafieldCustomerAccountAccessInput);

        return $this;
    }
}
