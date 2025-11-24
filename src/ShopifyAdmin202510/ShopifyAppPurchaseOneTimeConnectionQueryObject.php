<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppPurchaseOneTimeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppPurchaseOneTimeConnection";

    public function selectEdges(ShopifyAppPurchaseOneTimeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppPurchaseOneTimeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyAppPurchaseOneTimeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppPurchaseOneTimeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyAppPurchaseOneTimeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
