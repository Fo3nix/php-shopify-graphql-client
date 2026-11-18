<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shipping option for delivery of a subscription contract.
 */
class ShopifySubscriptionShippingOptionResultSuccessQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionShippingOptionResultSuccess";

    /**
     * Available shipping options.
     */
    public function selectShippingOptions(?ShopifySubscriptionShippingOptionResultSuccessShippingOptionsArgumentsObject $argsObject = null): ShopifySubscriptionShippingOptionQueryObject
    {
        $object = new ShopifySubscriptionShippingOptionQueryObject("shippingOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
