<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDiscountEntitledLinesQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountEntitledLines";

    public function selectAll()
    {
        $this->selectField("all");

        return $this;
    }

    public function selectLines(SubscriptionDiscountEntitledLinesLinesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionLineConnectionQueryObject("lines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
