<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class RefundLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundLineItemConnection";

    public function selectEdges(RefundLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new RefundLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(RefundLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new RefundLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(RefundLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
