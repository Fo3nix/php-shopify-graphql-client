<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyResourcePublicationV2ConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublicationV2Connection";

    public function selectEdges(ShopifyResourcePublicationV2ConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationV2EdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyResourcePublicationV2ConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationV2QueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyResourcePublicationV2ConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
