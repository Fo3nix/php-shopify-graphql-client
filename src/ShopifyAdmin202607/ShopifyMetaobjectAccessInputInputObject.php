<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields that set access permissions for the definition's metaobjects.
 */
class ShopifyMetaobjectAccessInputInputObject extends InputObject
{
    protected $admin;
    protected $storefront;
    protected $customerAccount;

    /**
     * The access permitted on the Admin API.
     */
    public function setAdmin($shopifyMetaobjectAdminAccessInput): static
    {
        $this->admin = new RawObject($shopifyMetaobjectAdminAccessInput);

        return $this;
    }

    /**
     * The access permitted on the Storefront API.
     */
    public function setStorefront($shopifyMetaobjectStorefrontAccess): static
    {
        $this->storefront = new RawObject($shopifyMetaobjectStorefrontAccess);

        return $this;
    }

    /**
     * The access permitted on the Customer Account API.
     */
    public function setCustomerAccount($shopifyMetaobjectCustomerAccountAccess): static
    {
        $this->customerAccount = new RawObject($shopifyMetaobjectCustomerAccountAccess);

        return $this;
    }
}
