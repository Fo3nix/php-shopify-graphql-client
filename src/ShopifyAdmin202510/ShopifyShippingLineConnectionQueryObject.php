<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShippingLineConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingLineConnection";

    public function selectEdges(ShopifyShippingLineConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShippingLineEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyShippingLineConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShippingLineQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyShippingLineConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
