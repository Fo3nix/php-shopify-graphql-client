<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductPublicationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductPublicationConnection";

    public function selectEdges(ShopifyProductPublicationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductPublicationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyProductPublicationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductPublicationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyProductPublicationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
