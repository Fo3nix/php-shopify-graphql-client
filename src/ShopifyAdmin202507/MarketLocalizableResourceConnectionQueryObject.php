<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketLocalizableResourceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalizableResourceConnection";

    public function selectEdges(MarketLocalizableResourceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new MarketLocalizableResourceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(MarketLocalizableResourceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MarketLocalizableResourceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(MarketLocalizableResourceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
