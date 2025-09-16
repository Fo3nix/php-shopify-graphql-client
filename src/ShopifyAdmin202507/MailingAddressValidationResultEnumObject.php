<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MailingAddressValidationResultEnumObject extends EnumObject
{
    const NO_ISSUES = "NO_ISSUES";
    const ERROR = "ERROR";
    const WARNING = "WARNING";
}
