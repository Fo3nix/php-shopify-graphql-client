<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a shipping document.
 */
class ShopifyShippingObjectsShippingDocumentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingObjectsShippingDocument";

    /**
     * The type of the shipping document.
     */
    public function selectDocumentType(): static
    {
        $this->selectField("documentType");

        return $this;
    }

    /**
     * File format of the shipping document.
     */
    public function selectFormat(): static
    {
        $this->selectField("format");

        return $this;
    }

    /**
     * The last time the document was printed.
     */
    public function selectPrintedAt(): static
    {
        $this->selectField("printedAt");

        return $this;
    }

    /**
     * The shipping label associated with the shipping document.
     */
    public function selectShippingLabelId(): static
    {
        $this->selectField("shippingLabelId");

        return $this;
    }

    /**
     * URL of the shipping document.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
