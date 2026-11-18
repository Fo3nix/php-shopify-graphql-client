<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for barcodes that are associated with a product variant. A variant accepts up to
 * 20 barcodes, and a given variant input can't
 * set both `barcode` and `barcodes`. Refer to the
 * [`ProductVariantBarcode`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariantBarcode)
 * object for how these barcodes are returned.
 */
class ShopifyBarcodeInputInputObject extends InputObject
{
    const REQUIRED = ["value"];

    protected $value;
    protected $type;

    /**
     * The value of the barcode. For example, `9780262033848`. Maximum length: 255 characters.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * The associated standard that the barcode conforms to. Barcode types are validated against their respective format standards. A `null` format denotes no type provided on write and the value is stored as entered.
     */
    public function setType($shopifyBarcodeType): static
    {
        $this->type = new RawObject($shopifyBarcodeType);

        return $this;
    }
}
