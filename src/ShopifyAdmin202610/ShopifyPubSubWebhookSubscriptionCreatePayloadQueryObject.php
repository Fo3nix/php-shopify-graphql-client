<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `pubSubWebhookSubscriptionCreate` mutation.
 */
class ShopifyPubSubWebhookSubscriptionCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PubSubWebhookSubscriptionCreatePayload";

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPubSubWebhookSubscriptionCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPubSubWebhookSubscriptionCreateUserErrorQueryObject
    {
        $object = new ShopifyPubSubWebhookSubscriptionCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The webhook subscription that was created.
     */
    public function selectWebhookSubscription(?ShopifyPubSubWebhookSubscriptionCreatePayloadWebhookSubscriptionArgumentsObject $argsObject = null): ShopifyWebhookSubscriptionQueryObject
    {
        $object = new ShopifyWebhookSubscriptionQueryObject("webhookSubscription");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
