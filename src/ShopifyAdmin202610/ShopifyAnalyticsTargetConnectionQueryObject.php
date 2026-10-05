<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAnalyticsTargetConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsTargetConnection";

    public function selectEdges(ShopifyAnalyticsTargetConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAnalyticsTargetEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyAnalyticsTargetConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAnalyticsTargetQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyAnalyticsTargetConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
