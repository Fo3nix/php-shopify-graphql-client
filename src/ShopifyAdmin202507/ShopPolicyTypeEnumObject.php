<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ShopPolicyTypeEnumObject extends EnumObject
{
    const REFUND_POLICY = "REFUND_POLICY";
    const SHIPPING_POLICY = "SHIPPING_POLICY";
    const PRIVACY_POLICY = "PRIVACY_POLICY";
    const TERMS_OF_SERVICE = "TERMS_OF_SERVICE";
    const TERMS_OF_SALE = "TERMS_OF_SALE";
    const LEGAL_NOTICE = "LEGAL_NOTICE";
    const SUBSCRIPTION_POLICY = "SUBSCRIPTION_POLICY";
    const CONTACT_INFORMATION = "CONTACT_INFORMATION";
}
