<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MobilePlatformApplicationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MobilePlatformApplicationConnection";

    public function selectEdges(MobilePlatformApplicationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new MobilePlatformApplicationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(MobilePlatformApplicationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MobilePlatformApplicationUnionObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(MobilePlatformApplicationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
