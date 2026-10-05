<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyArticleAuthorEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ArticleAuthorEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyArticleAuthorEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyArticleAuthorQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
