<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The result of a ShopifyQL query.
 */
class ShopifyShopifyqlTableDataQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlTableData";

    /**
     * The columns of the table.
     */
    public function selectColumns(?ShopifyShopifyqlTableDataColumnsArgumentsObject $argsObject = null): ShopifyShopifyqlTableDataColumnQueryObject
    {
        $object = new ShopifyShopifyqlTableDataColumnQueryObject("columns");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Per-row metadata, aligned by index with `rows`.
     */
    public function selectRowMetadata(?ShopifyShopifyqlTableDataRowMetadataArgumentsObject $argsObject = null): ShopifyShopifyqlRowMetadataQueryObject
    {
        $object = new ShopifyShopifyqlRowMetadataQueryObject("rowMetadata");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The rows of the table.
     */
    public function selectRows(): static
    {
        $this->selectField("rows");

        return $this;
    }
}
