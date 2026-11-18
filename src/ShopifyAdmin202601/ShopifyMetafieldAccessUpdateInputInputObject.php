<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for the access settings for the metafields under the definition.
 */
class ShopifyMetafieldAccessUpdateInputInputObject extends InputObject
{
    protected $admin;
    protected $storefront;
    protected $customerAccount;

    /**
     * The admin access setting to use for the metafields under this definition.
     */
    public function setAdmin($shopifyMetafieldAdminAccessInput): static
    {
        $this->admin = new RawObject($shopifyMetafieldAdminAccessInput);

        return $this;
    }

    /**
     * The storefront access setting to use for the metafields under this definition.
     */
    public function setStorefront($shopifyMetafieldStorefrontAccessInput): static
    {
        $this->storefront = new RawObject($shopifyMetafieldStorefrontAccessInput);

        return $this;
    }

    /**
     * The Customer Account API access setting to use for the metafields under this definition.
     */
    public function setCustomerAccount($shopifyMetafieldCustomerAccountAccessInput): static
    {
        $this->customerAccount = new RawObject($shopifyMetafieldCustomerAccountAccessInput);

        return $this;
    }
}
