<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible values for the cart link content type for the header.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCartLinkContentTypeEnumObject extends EnumObject
{
    /**
     * The checkout header content type icon value.
     */
    const ICON = "ICON";
    /**
     * The checkout header content type image value.
     */
    const IMAGE = "IMAGE";
    /**
     * The checkout header content type text value.
     */
    const TEXT = "TEXT";
}
