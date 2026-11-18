<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Available shop policy types.
 */
class ShopifyShopPolicyTypeEnumObject extends EnumObject
{
    /**
     * The refund policy.
     */
    const REFUND_POLICY = "REFUND_POLICY";
    /**
     * The shipping policy.
     */
    const SHIPPING_POLICY = "SHIPPING_POLICY";
    /**
     * The privacy policy.
     */
    const PRIVACY_POLICY = "PRIVACY_POLICY";
    /**
     * The terms of service.
     */
    const TERMS_OF_SERVICE = "TERMS_OF_SERVICE";
    /**
     * The terms of sale.
     */
    const TERMS_OF_SALE = "TERMS_OF_SALE";
    /**
     * The legal notice.
     */
    const LEGAL_NOTICE = "LEGAL_NOTICE";
    /**
     * The cancellation policy.
     */
    const SUBSCRIPTION_POLICY = "SUBSCRIPTION_POLICY";
    /**
     * The contact information.
     */
    const CONTACT_INFORMATION = "CONTACT_INFORMATION";
}
