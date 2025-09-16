<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsBankAccountConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBankAccountConnection";

    public function selectEdges(ShopifyPaymentsBankAccountConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsBankAccountEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyPaymentsBankAccountConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsBankAccountQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyPaymentsBankAccountConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
