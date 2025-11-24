<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCountryHarmonizedSystemCodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CountryHarmonizedSystemCodeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCountryHarmonizedSystemCodeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountryHarmonizedSystemCodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
