<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCountryHarmonizedSystemCodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CountryHarmonizedSystemCodeConnection";

    public function selectEdges(ShopifyCountryHarmonizedSystemCodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountryHarmonizedSystemCodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCountryHarmonizedSystemCodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountryHarmonizedSystemCodeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCountryHarmonizedSystemCodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
