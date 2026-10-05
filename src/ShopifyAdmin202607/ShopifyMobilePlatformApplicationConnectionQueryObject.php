<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMobilePlatformApplicationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MobilePlatformApplicationConnection";

    public function selectEdges(ShopifyMobilePlatformApplicationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMobilePlatformApplicationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMobilePlatformApplicationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMobilePlatformApplicationUnionObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMobilePlatformApplicationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
