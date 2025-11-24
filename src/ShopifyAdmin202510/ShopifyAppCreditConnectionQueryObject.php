<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppCreditConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppCreditConnection";

    public function selectEdges(ShopifyAppCreditConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppCreditEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyAppCreditConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppCreditQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyAppCreditConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
