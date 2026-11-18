<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The levels of privacy of an app installation.
 */
class ShopifyAppInstallationPrivacyEnumObject extends EnumObject
{
    const PUBLIC = "PUBLIC";
    const PRIVATE = "PRIVATE";
}
