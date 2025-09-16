<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketingEventConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingEventConnection";

    public function selectEdges(MarketingEventConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new MarketingEventEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(MarketingEventConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MarketingEventQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(MarketingEventConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
