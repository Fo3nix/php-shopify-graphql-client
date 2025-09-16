<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CurrencySettingEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CurrencySettingEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CurrencySettingEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CurrencySettingQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
