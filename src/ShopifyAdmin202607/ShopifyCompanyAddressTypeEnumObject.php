<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The valid values for the address type of a company.
 */
class ShopifyCompanyAddressTypeEnumObject extends EnumObject
{
    /**
     * The address is a billing address.
     */
    const BILLING = "BILLING";
    /**
     * The address is a shipping address.
     */
    const SHIPPING = "SHIPPING";
}
