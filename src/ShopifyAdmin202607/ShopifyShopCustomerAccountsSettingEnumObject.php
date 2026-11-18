<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents the shop's customer account requirement preference.
 */
class ShopifyShopCustomerAccountsSettingEnumObject extends EnumObject
{
    const REQUIRED = "REQUIRED";
    const OPTIONAL = "OPTIONAL";
    const DISABLED = "DISABLED";
}
