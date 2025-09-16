<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StandardMetafieldDefinitionTemplateConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetafieldDefinitionTemplateConnection";

    public function selectEdges(StandardMetafieldDefinitionTemplateConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new StandardMetafieldDefinitionTemplateEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(StandardMetafieldDefinitionTemplateConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new StandardMetafieldDefinitionTemplateQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(StandardMetafieldDefinitionTemplateConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
