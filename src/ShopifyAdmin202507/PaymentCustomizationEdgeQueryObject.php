<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PaymentCustomizationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentCustomizationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(PaymentCustomizationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new PaymentCustomizationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
