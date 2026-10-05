<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPriceListAdjustmentSettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListAdjustmentSettings";

    public function selectCompareAtMode()
    {
        $this->selectField("compareAtMode");

        return $this;
    }
}
