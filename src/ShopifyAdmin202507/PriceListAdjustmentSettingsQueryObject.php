<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PriceListAdjustmentSettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListAdjustmentSettings";

    public function selectCompareAtMode()
    {
        $this->selectField("compareAtMode");

        return $this;
    }
}
