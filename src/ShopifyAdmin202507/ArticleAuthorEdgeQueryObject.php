<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ArticleAuthorEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ArticleAuthorEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ArticleAuthorEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ArticleAuthorQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
