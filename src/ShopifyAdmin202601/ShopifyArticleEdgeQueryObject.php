<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyArticleEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ArticleEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyArticleEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyArticleQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
