<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The login redirection target for customer accounts.
 */
class ShopifyCustomerAccountsVersionEnumObject extends EnumObject
{
    /**
     * The customer is redirected to the classic customer accounts login page.
     */
    const CLASSIC = "CLASSIC";
    /**
     * The customer is redirected to the new customer accounts login page.
     */
    const NEW_CUSTOMER_ACCOUNTS = "NEW_CUSTOMER_ACCOUNTS";
}
