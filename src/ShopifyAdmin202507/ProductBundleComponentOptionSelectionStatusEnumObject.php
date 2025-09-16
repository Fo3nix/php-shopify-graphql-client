<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ProductBundleComponentOptionSelectionStatusEnumObject extends EnumObject
{
    const SELECTED = "SELECTED";
    const DESELECTED = "DESELECTED";
    const NEW = "NEW";
    const UNAVAILABLE = "UNAVAILABLE";
}
