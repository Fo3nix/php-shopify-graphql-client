<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ExchangeV2ConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2Connection";

    public function selectEdges(ExchangeV2ConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ExchangeV2EdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ExchangeV2ConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ExchangeV2QueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ExchangeV2ConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
