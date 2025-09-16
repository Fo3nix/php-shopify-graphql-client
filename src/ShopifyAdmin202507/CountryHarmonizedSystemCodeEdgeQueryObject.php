<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CountryHarmonizedSystemCodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CountryHarmonizedSystemCodeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CountryHarmonizedSystemCodeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CountryHarmonizedSystemCodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
