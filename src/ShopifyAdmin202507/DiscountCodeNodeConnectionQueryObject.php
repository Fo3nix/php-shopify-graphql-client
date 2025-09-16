<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountCodeNodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeNodeConnection";

    public function selectEdges(DiscountCodeNodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DiscountCodeNodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DiscountCodeNodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountCodeNodeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DiscountCodeNodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
