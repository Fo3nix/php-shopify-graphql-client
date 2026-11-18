<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The input fields for a shop's privacy settings.
 */
class ShopifyPrivacyFeaturesEnumEnumObject extends EnumObject
{
    /**
     * The cookie banner feature.
     */
    const COOKIE_BANNER = "COOKIE_BANNER";
    /**
     * The data sale opt out page feature.
     */
    const DATA_SALE_OPT_OUT_PAGE = "DATA_SALE_OPT_OUT_PAGE";
    /**
     * The privacy policy feature.
     */
    const PRIVACY_POLICY = "PRIVACY_POLICY";
}
