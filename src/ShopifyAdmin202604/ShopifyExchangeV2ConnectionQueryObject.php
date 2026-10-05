<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyExchangeV2ConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2Connection";

    public function selectEdges(ShopifyExchangeV2ConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyExchangeV2EdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyExchangeV2ConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyExchangeV2QueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyExchangeV2ConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
