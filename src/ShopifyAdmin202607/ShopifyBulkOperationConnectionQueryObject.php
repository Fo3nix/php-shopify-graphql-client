<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyBulkOperationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "BulkOperationConnection";

    public function selectEdges(ShopifyBulkOperationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyBulkOperationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyBulkOperationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyBulkOperationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyBulkOperationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
