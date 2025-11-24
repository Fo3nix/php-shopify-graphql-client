<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyLocalizationExtensionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocalizationExtensionConnection";

    public function selectEdges(ShopifyLocalizationExtensionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocalizationExtensionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyLocalizationExtensionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocalizationExtensionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyLocalizationExtensionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
