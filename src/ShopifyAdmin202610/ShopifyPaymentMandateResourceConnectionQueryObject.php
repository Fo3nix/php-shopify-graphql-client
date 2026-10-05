<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentMandateResourceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentMandateResourceConnection";

    public function selectEdges(ShopifyPaymentMandateResourceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentMandateResourceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyPaymentMandateResourceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentMandateResourceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyPaymentMandateResourceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
