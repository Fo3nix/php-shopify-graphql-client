<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class UrlRedirectConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectConnection";

    public function selectEdges(UrlRedirectConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new UrlRedirectEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(UrlRedirectConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new UrlRedirectQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(UrlRedirectConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
