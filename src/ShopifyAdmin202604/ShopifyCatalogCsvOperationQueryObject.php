<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCatalogCsvOperationQueryObject extends QueryObject
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

    public function selectRowCount(ShopifyCatalogCsvOperationRowCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRowCountQueryObject("rowCount");
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
