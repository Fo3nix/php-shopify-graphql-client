<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPublicationResourceOperationQueryObject extends QueryObject
{
    const OBJECT_NAME = "PublicationResourceOperation";

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

    public function selectRowCount(ShopifyPublicationResourceOperationRowCountArgumentsObject $argsObject = null)
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
