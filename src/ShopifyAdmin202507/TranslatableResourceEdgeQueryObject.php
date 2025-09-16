<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TranslatableResourceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TranslatableResourceEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(TranslatableResourceEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new TranslatableResourceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
