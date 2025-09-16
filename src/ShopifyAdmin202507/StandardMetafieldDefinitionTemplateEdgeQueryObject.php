<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StandardMetafieldDefinitionTemplateEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetafieldDefinitionTemplateEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(StandardMetafieldDefinitionTemplateEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new StandardMetafieldDefinitionTemplateQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
