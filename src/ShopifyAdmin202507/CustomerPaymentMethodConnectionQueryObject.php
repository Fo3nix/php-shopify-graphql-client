<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerPaymentMethodConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodConnection";

    public function selectEdges(CustomerPaymentMethodConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CustomerPaymentMethodEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(CustomerPaymentMethodConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new CustomerPaymentMethodQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CustomerPaymentMethodConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
