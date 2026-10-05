<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerVisitProductInfoConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerVisitProductInfoConnection";

    public function selectEdges(ShopifyCustomerVisitProductInfoConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerVisitProductInfoEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCustomerVisitProductInfoConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerVisitProductInfoQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCustomerVisitProductInfoConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
