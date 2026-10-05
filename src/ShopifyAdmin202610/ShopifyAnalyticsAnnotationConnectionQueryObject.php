<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAnalyticsAnnotationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsAnnotationConnection";

    public function selectEdges(ShopifyAnalyticsAnnotationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAnalyticsAnnotationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyAnalyticsAnnotationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAnalyticsAnnotationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyAnalyticsAnnotationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
