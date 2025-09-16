<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CurrencySettingConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CurrencySettingConnection";

    public function selectEdges(CurrencySettingConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CurrencySettingEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(CurrencySettingConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new CurrencySettingQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CurrencySettingConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
