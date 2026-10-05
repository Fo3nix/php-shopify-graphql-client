<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentCustomizationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentCustomizationConnection";

    public function selectEdges(ShopifyPaymentCustomizationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentCustomizationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyPaymentCustomizationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentCustomizationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyPaymentCustomizationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
