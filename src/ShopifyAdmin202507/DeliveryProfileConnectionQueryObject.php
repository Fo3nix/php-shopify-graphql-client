<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryProfileConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileConnection";

    public function selectEdges(DeliveryProfileConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryProfileEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DeliveryProfileConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryProfileQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DeliveryProfileConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
