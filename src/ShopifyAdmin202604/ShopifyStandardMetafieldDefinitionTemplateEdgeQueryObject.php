<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStandardMetafieldDefinitionTemplateEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetafieldDefinitionTemplateEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyStandardMetafieldDefinitionTemplateEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStandardMetafieldDefinitionTemplateQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
