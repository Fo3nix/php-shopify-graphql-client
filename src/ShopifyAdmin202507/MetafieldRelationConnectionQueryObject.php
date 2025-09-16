<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldRelationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldRelationConnection";

    public function selectEdges(MetafieldRelationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldRelationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(MetafieldRelationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldRelationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(MetafieldRelationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
