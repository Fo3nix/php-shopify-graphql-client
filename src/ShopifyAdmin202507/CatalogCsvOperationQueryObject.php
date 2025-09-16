<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CatalogCsvOperationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CatalogCsvOperation";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectProcessedRowCount()
    {
        $this->selectField("processedRowCount");

        return $this;
    }

    public function selectRowCount(CatalogCsvOperationRowCountArgumentsObject $argsObject = null)
    {
        $object = new RowCountQueryObject("rowCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
