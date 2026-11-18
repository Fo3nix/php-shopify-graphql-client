<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A barcode associated with a product variant.
 *
 * A variant supports up to 20 barcodes, each of
 * which can have a
 * [type](https://shopify.dev/docs/api/admin-graphql/latest/enums/BarcodeType).
 * Barcode types are validated against their respective format standards.
 */
class ShopifyProductVariantBarcodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantBarcode";

    /**
     * The associated standard that the barcode conforms to. Barcode types are validated against their
     * respective format standards. A `null` format denotes no type provided on write and the value is
     * stored as entered.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The value of the barcode. For example, `9780262033848`. Maximum length: 255 characters.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
