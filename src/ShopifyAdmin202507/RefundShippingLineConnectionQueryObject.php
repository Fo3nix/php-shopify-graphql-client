<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class RefundShippingLineConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundShippingLineConnection";

    public function selectEdges(RefundShippingLineConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new RefundShippingLineEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(RefundShippingLineConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new RefundShippingLineQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(RefundShippingLineConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
