<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AbandonedCheckoutLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutLineItemConnection";

    public function selectEdges(AbandonedCheckoutLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new AbandonedCheckoutLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(AbandonedCheckoutLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new AbandonedCheckoutLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(AbandonedCheckoutLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
