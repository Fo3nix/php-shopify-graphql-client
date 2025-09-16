<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionShippingOptionResultSuccessQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionShippingOptionResultSuccess";

    public function selectShippingOptions(SubscriptionShippingOptionResultSuccessShippingOptionsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionShippingOptionQueryObject("shippingOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
