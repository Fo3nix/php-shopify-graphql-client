<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShippingLineConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingLineConnection";

    public function selectEdges(ShippingLineConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShippingLineEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShippingLineConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShippingLineQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShippingLineConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
