<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CountryHarmonizedSystemCodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CountryHarmonizedSystemCodeConnection";

    public function selectEdges(CountryHarmonizedSystemCodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CountryHarmonizedSystemCodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(CountryHarmonizedSystemCodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new CountryHarmonizedSystemCodeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CountryHarmonizedSystemCodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
