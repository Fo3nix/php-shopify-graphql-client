<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShippingObjectsShippingDocumentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingObjectsShippingDocument";

    public function selectDocumentType()
    {
        $this->selectField("documentType");

        return $this;
    }

    public function selectFormat()
    {
        $this->selectField("format");

        return $this;
    }

    public function selectPrintedAt()
    {
        $this->selectField("printedAt");

        return $this;
    }

    public function selectShippingLabelId()
    {
        $this->selectField("shippingLabelId");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
