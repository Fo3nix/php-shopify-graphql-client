<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCurrencySettingEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CurrencySettingEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCurrencySettingEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCurrencySettingQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
