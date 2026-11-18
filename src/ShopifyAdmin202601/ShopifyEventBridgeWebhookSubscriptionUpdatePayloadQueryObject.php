<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `eventBridgeWebhookSubscriptionUpdate` mutation.
 */
class ShopifyEventBridgeWebhookSubscriptionUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "EventBridgeWebhookSubscriptionUpdatePayload";

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyEventBridgeWebhookSubscriptionUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The webhook subscription that was updated.
     */
    public function selectWebhookSubscription(?ShopifyEventBridgeWebhookSubscriptionUpdatePayloadWebhookSubscriptionArgumentsObject $argsObject = null): ShopifyWebhookSubscriptionQueryObject
    {
        $object = new ShopifyWebhookSubscriptionQueryObject("webhookSubscription");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
