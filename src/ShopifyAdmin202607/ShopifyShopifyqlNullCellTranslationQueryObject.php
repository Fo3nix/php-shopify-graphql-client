<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyqlNullCellTranslationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlNullCellTranslation";

    public function selectColumnName()
    {
        $this->selectField("columnName");

        return $this;
    }

    public function selectDisplayText()
    {
        $this->selectField("displayText");

        return $this;
    }
}
