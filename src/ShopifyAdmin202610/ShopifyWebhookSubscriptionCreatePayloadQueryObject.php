<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `webhookSubscriptionCreate` mutation.
 */
class ShopifyWebhookSubscriptionCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookSubscriptionCreatePayload";

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyWebhookSubscriptionCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The webhook subscription that was created.
     */
    public function selectWebhookSubscription(?ShopifyWebhookSubscriptionCreatePayloadWebhookSubscriptionArgumentsObject $argsObject = null): ShopifyWebhookSubscriptionQueryObject
    {
        $object = new ShopifyWebhookSubscriptionQueryObject("webhookSubscription");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
