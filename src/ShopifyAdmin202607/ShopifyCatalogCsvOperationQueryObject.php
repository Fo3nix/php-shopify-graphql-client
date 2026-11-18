<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A catalog csv operation represents a CSV file import.
 */
class ShopifyCatalogCsvOperationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CatalogCsvOperation";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The count of processed rows, summing imported, failed, and skipped rows.
     */
    public function selectProcessedRowCount(): static
    {
        $this->selectField("processedRowCount");

        return $this;
    }

    /**
     * Represents a rows objects within this background operation.
     */
    public function selectRowCount(?ShopifyCatalogCsvOperationRowCountArgumentsObject $argsObject = null): ShopifyRowCountQueryObject
    {
        $object = new ShopifyRowCountQueryObject("rowCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of this operation.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
