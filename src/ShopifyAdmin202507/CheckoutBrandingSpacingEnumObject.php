<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CheckoutBrandingSpacingEnumObject extends EnumObject
{
    const NONE = "NONE";
    const EXTRA_TIGHT = "EXTRA_TIGHT";
    const TIGHT = "TIGHT";
    const BASE = "BASE";
    const LOOSE = "LOOSE";
    const EXTRA_LOOSE = "EXTRA_LOOSE";
}
