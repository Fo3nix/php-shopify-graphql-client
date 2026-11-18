<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `webhookSubscriptionUpdate` mutation.
 */
class ShopifyWebhookSubscriptionUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookSubscriptionUpdatePayload";

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyWebhookSubscriptionUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
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
    public function selectWebhookSubscription(?ShopifyWebhookSubscriptionUpdatePayloadWebhookSubscriptionArgumentsObject $argsObject = null): ShopifyWebhookSubscriptionQueryObject
    {
        $object = new ShopifyWebhookSubscriptionQueryObject("webhookSubscription");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
