<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `appSubscriptionCancel` mutation.
 */
class ShopifyAppSubscriptionCancelPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionCancelPayload";

    /**
     * The cancelled app subscription.
     */
    public function selectAppSubscription(?ShopifyAppSubscriptionCancelPayloadAppSubscriptionArgumentsObject $argsObject = null): ShopifyAppSubscriptionQueryObject
    {
        $object = new ShopifyAppSubscriptionQueryObject("appSubscription");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAppSubscriptionCancelPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
