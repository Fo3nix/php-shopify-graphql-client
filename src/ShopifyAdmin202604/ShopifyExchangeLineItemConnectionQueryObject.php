<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyExchangeLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeLineItemConnection";

    public function selectEdges(ShopifyExchangeLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyExchangeLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyExchangeLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyExchangeLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyExchangeLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
