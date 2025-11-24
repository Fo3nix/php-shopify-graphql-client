<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCurrencySettingConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CurrencySettingConnection";

    public function selectEdges(ShopifyCurrencySettingConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCurrencySettingEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCurrencySettingConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCurrencySettingQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCurrencySettingConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
