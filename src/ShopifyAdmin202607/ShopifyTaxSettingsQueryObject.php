<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTaxSettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxSettings";

    public function selectTaxId()
    {
        $this->selectField("taxId");

        return $this;
    }
}
