<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ConsentPolicyError`.
 */
class ShopifyConsentPolicyErrorCodeEnumObject extends EnumObject
{
    /**
     * Country code is required.
     */
    const COUNTRY_CODE_REQUIRED = "COUNTRY_CODE_REQUIRED";
    /**
     * Region code is required for countries with existing regional policies.
     */
    const REGION_CODE_REQUIRED = "REGION_CODE_REQUIRED";
    /**
     * Region code must match the country code.
     */
    const REGION_CODE_MUST_MATCH_COUNTRY_CODE = "REGION_CODE_MUST_MATCH_COUNTRY_CODE";
    /**
     * Shopify's cookie banner must be disabled.
     */
    const SHOPIFY_COOKIE_BANNER_NOT_DISABLED = "SHOPIFY_COOKIE_BANNER_NOT_DISABLED";
    /**
     * Unsupported consent policy.
     */
    const UNSUPORTED_CONSENT_POLICY = "UNSUPORTED_CONSENT_POLICY";
}
