<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTranslatableResourceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TranslatableResourceConnection";

    public function selectEdges(ShopifyTranslatableResourceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslatableResourceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyTranslatableResourceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslatableResourceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyTranslatableResourceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
