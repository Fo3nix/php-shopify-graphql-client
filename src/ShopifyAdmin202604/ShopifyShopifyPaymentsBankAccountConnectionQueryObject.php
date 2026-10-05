<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsBankAccountConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBankAccountConnection";

    public function selectEdges(ShopifyShopifyPaymentsBankAccountConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsBankAccountEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyShopifyPaymentsBankAccountConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsBankAccountQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyShopifyPaymentsBankAccountConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
