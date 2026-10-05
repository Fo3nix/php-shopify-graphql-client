<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionShippingOptionResultSuccessQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionShippingOptionResultSuccess";

    public function selectShippingOptions(ShopifySubscriptionShippingOptionResultSuccessShippingOptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionShippingOptionQueryObject("shippingOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
