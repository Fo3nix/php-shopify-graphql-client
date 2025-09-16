<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsTaxIdentificationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsTaxIdentification";

    public function selectTaxIdentificationType()
    {
        $this->selectField("taxIdentificationType");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
