<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountNodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountNodeConnection";

    public function selectEdges(DiscountNodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DiscountNodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DiscountNodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountNodeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DiscountNodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
