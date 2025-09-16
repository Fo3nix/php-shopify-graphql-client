<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PaymentCustomizationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentCustomizationConnection";

    public function selectEdges(PaymentCustomizationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new PaymentCustomizationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(PaymentCustomizationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new PaymentCustomizationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(PaymentCustomizationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
