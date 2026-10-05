<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMailingAddressValidationResultEnumObject extends EnumObject
{
    const NO_ISSUES = "NO_ISSUES";
    const ERROR = "ERROR";
    const WARNING = "WARNING";
}
