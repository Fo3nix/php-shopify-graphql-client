<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for the access settings for the metafields under the standard definition.
 */
class ShopifyStandardMetafieldDefinitionAccessInputInputObject extends InputObject
{
    protected $admin;
    protected $storefront;
    protected $customerAccount;

    /**
     * The Admin API access setting to use for the metafields under this definition.
     */
    public function setAdmin($shopifyMetafieldAdminAccessInput): static
    {
        $this->admin = new RawObject($shopifyMetafieldAdminAccessInput);

        return $this;
    }

    /**
     * The Storefront API access setting to use for the metafields under this definition.
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
