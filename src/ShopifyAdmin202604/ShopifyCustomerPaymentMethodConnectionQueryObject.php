<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerPaymentMethodConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodConnection";

    public function selectEdges(ShopifyCustomerPaymentMethodConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPaymentMethodEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCustomerPaymentMethodConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPaymentMethodQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCustomerPaymentMethodConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
