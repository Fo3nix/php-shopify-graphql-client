<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyFunctionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyFunctionConnection";

    public function selectEdges(ShopifyShopifyFunctionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyFunctionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyShopifyFunctionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyFunctionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyShopifyFunctionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
