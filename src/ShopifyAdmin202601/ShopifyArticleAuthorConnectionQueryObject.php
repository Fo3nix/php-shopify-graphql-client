<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyArticleAuthorConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ArticleAuthorConnection";

    public function selectEdges(ShopifyArticleAuthorConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyArticleAuthorEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyArticleAuthorConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyArticleAuthorQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyArticleAuthorConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
