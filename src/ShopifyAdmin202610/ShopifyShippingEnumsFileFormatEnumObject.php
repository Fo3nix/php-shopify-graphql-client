<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * File format for label.
 */
class ShopifyShippingEnumsFileFormatEnumObject extends EnumObject
{
    /**
     * PDF file format.
     */
    const PDF = "PDF";
    /**
     * ZPL file format.
     */
    const ZPL = "ZPL";
}
