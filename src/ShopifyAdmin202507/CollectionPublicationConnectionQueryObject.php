<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CollectionPublicationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionPublicationConnection";

    public function selectEdges(CollectionPublicationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CollectionPublicationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(CollectionPublicationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new CollectionPublicationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CollectionPublicationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
