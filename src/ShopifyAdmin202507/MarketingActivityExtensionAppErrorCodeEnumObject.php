<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MarketingActivityExtensionAppErrorCodeEnumObject extends EnumObject
{
    const NOT_ONBOARDED_ERROR = "NOT_ONBOARDED_ERROR";
    const VALIDATION_ERROR = "VALIDATION_ERROR";
    const API_ERROR = "API_ERROR";
    const PLATFORM_ERROR = "PLATFORM_ERROR";
    const INSTALL_REQUIRED_ERROR = "INSTALL_REQUIRED_ERROR";
}
