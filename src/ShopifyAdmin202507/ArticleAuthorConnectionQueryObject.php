<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ArticleAuthorConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ArticleAuthorConnection";

    public function selectEdges(ArticleAuthorConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ArticleAuthorEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ArticleAuthorConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ArticleAuthorQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ArticleAuthorConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
