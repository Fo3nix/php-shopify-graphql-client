<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyBarcodeTypeEnumObject extends EnumObject
{
    const UPC = "UPC";
    const EAN = "EAN";
    const ISBN = "ISBN";
    const GTIN = "GTIN";
    const ASIN = "ASIN";
    const NS_PID = "NS_PID";
}
