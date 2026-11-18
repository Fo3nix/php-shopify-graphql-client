<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Localized display text shown in place of a null cell in a ShopifyQL result row.
 */
class ShopifyShopifyqlNullCellTranslationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlNullCellTranslation";

    /**
     * The name of the column the translation applies to.
     */
    public function selectColumnName(): static
    {
        $this->selectField("columnName");

        return $this;
    }

    /**
     * The localized text to display in place of the null value.
     */
    public function selectDisplayText(): static
    {
        $this->selectField("displayText");

        return $this;
    }
}
