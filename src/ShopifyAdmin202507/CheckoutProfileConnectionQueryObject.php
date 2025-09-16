<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutProfileConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutProfileConnection";

    public function selectEdges(CheckoutProfileConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CheckoutProfileEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(CheckoutProfileConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new CheckoutProfileQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CheckoutProfileConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
