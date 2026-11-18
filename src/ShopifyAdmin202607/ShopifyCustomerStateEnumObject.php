<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The valid values for the state of a customer's account with a shop.
 */
class ShopifyCustomerStateEnumObject extends EnumObject
{
    /**
     * The customer declined the email invite to create an account.
     */
    const DECLINED = "DECLINED";
    /**
     * The customer doesn't have an active account. Customer accounts can be disabled from the Shopify admin at any time.
     */
    const DISABLED = "DISABLED";
    /**
     * The customer has created a legacy customer account, or has signed in to the shop's customer accounts.
     */
    const ENABLED = "ENABLED";
    /**
     * The customer has received an email invite to create an account.
     */
    const INVITED = "INVITED";
}
