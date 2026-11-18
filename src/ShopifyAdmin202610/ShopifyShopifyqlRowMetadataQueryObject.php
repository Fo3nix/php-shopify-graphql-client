<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Per-row metadata for a ShopifyQL result, aligned by index with the table's rows.
 */
class ShopifyShopifyqlRowMetadataQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlRowMetadata";

    /**
     * Localized display text for null cells in this row, by column.
     */
    public function selectNullCellTranslations(?ShopifyShopifyqlRowMetadataNullCellTranslationsArgumentsObject $argsObject = null): ShopifyShopifyqlNullCellTranslationQueryObject
    {
        $object = new ShopifyShopifyqlNullCellTranslationQueryObject("nullCellTranslations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Raw resource IDs associated with the row, aligned by column index. Each entry is the list of IDs for that column (empty when the cell has none). These are raw ShopifyQL identifiers (numeric IDs, or image URLs for some schemas), not GIDs.
     */
    public function selectRawResourceIds(): static
    {
        $this->selectField("rawResourceIds");

        return $this;
    }

    /**
     * Names of the columns whose values were rolled into the top-N "Other" remainder bucket.
     */
    public function selectTopNRemainderColumnNames(): static
    {
        $this->selectField("topNRemainderColumnNames");

        return $this;
    }
}
