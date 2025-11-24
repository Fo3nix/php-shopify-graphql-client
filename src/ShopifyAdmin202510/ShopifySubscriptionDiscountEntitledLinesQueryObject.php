<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionDiscountEntitledLinesQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountEntitledLines";

    public function selectAll()
    {
        $this->selectField("all");

        return $this;
    }

    public function selectLines(ShopifySubscriptionDiscountEntitledLinesLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionLineConnectionQueryObject("lines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
