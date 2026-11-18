<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of customer account native page.
 */
class ShopifyCustomerAccountNativePagePageTypeEnumObject extends EnumObject
{
    /**
     * An orders page type.
     */
    const NATIVE_ORDERS = "NATIVE_ORDERS";
    /**
     * A settings page type.
     */
    const NATIVE_SETTINGS = "NATIVE_SETTINGS";
    /**
     * A profile page type.
     */
    const NATIVE_PROFILE = "NATIVE_PROFILE";
    /**
     * An unknown page type. Represents new page types that may be added in future versions.
     */
    const UNKNOWN = "UNKNOWN";
}
