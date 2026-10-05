<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyProductBundleComponentOptionSelectionStatusEnumObject extends EnumObject
{
    const SELECTED = "SELECTED";
    const DESELECTED = "DESELECTED";
    const NEW = "NEW";
    const UNAVAILABLE = "UNAVAILABLE";
}
