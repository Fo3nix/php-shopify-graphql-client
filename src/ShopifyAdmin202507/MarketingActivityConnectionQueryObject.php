<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketingActivityConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivityConnection";

    public function selectEdges(MarketingActivityConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new MarketingActivityEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(MarketingActivityConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MarketingActivityQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(MarketingActivityConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
