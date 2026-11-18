<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents an operation publishing all products to a publication.
 */
class ShopifyAddAllProductsOperationQueryObject extends QueryObject
{
    const OBJECT_NAME = "AddAllProductsOperation";

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
    public function selectRowCount(?ShopifyAddAllProductsOperationRowCountArgumentsObject $argsObject = null): ShopifyRowCountQueryObject
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
