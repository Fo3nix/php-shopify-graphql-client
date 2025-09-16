<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ShopifyPaymentsBankAccountStatusEnumObject extends EnumObject
{
    const NEW = "NEW";
    const VALIDATED = "VALIDATED";
    const VERIFIED = "VERIFIED";
    const ERRORED = "ERRORED";
}
