<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LocalizationExtensionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocalizationExtensionConnection";

    public function selectEdges(LocalizationExtensionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new LocalizationExtensionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(LocalizationExtensionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new LocalizationExtensionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(LocalizationExtensionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
