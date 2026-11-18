<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a column in a ShopifyQL query response.
 */
class ShopifyShopifyqlTableDataColumnQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlTableDataColumn";

    /**
     * Whether the column was explicitly requested in the query or dynamically generated.
     */
    public function selectColumnOrigin(): static
    {
        $this->selectField("columnOrigin");

        return $this;
    }

    /**
     * The data type of the column.
     */
    public function selectDataType(): static
    {
        $this->selectField("dataType");

        return $this;
    }

    /**
     * The human-readable display name of the column.
     */
    public function selectDisplayName(): static
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * Metadata describing how a dynamic column was generated (comparison, totals, benchmark, attribution, etc.). Null for non-dynamic columns.
     */
    public function selectDynamicColumnMetadata(?ShopifyShopifyqlTableDataColumnDynamicColumnMetadataArgumentsObject $argsObject = null): ShopifyShopifyqlDynamicColumnMetadataQueryObject
    {
        $object = new ShopifyShopifyqlDynamicColumnMetadataQueryObject("dynamicColumnMetadata");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the column.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * A shortened display name for the column, suitable for compact UI such as metric tiles.
     */
    public function selectShortDisplayName(): static
    {
        $this->selectField("shortDisplayName");

        return $this;
    }

    /**
     * The element type of an array column or DAY_DURATION for a range column.
     */
    public function selectSubType(): static
    {
        $this->selectField("subType");

        return $this;
    }
}
