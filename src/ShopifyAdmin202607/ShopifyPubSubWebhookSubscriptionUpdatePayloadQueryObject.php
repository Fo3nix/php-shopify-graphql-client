<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `pubSubWebhookSubscriptionUpdate` mutation.
 */
class ShopifyPubSubWebhookSubscriptionUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PubSubWebhookSubscriptionUpdatePayload";

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPubSubWebhookSubscriptionUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPubSubWebhookSubscriptionUpdateUserErrorQueryObject
    {
        $object = new ShopifyPubSubWebhookSubscriptionUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The webhook subscription that was updated.
     */
    public function selectWebhookSubscription(?ShopifyPubSubWebhookSubscriptionUpdatePayloadWebhookSubscriptionArgumentsObject $argsObject = null): ShopifyWebhookSubscriptionQueryObject
    {
        $object = new ShopifyWebhookSubscriptionQueryObject("webhookSubscription");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
