<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppPurchaseOneTimeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppPurchaseOneTimeConnection";

    public function selectEdges(AppPurchaseOneTimeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new AppPurchaseOneTimeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(AppPurchaseOneTimeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new AppPurchaseOneTimeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(AppPurchaseOneTimeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
