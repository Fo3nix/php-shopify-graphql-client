<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ExchangeLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeLineItemConnection";

    public function selectEdges(ExchangeLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ExchangeLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ExchangeLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ExchangeLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ExchangeLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
