<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyShopifyPaymentsBankAccountStatusEnumObject extends EnumObject
{
    const NEW = "NEW";
    const VALIDATED = "VALIDATED";
    const VERIFIED = "VERIFIED";
    const ERRORED = "ERRORED";
}
