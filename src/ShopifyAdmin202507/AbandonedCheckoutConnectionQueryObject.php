<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AbandonedCheckoutConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutConnection";

    public function selectEdges(AbandonedCheckoutConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new AbandonedCheckoutEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(AbandonedCheckoutConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new AbandonedCheckoutQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(AbandonedCheckoutConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
