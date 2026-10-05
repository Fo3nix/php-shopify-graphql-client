<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStandardMetafieldDefinitionTemplateConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetafieldDefinitionTemplateConnection";

    public function selectEdges(ShopifyStandardMetafieldDefinitionTemplateConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStandardMetafieldDefinitionTemplateEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyStandardMetafieldDefinitionTemplateConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStandardMetafieldDefinitionTemplateQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyStandardMetafieldDefinitionTemplateConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
