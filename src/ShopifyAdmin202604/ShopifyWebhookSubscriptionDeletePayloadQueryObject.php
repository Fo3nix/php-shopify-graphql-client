<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `webhookSubscriptionDelete` mutation.
 */
class ShopifyWebhookSubscriptionDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookSubscriptionDeletePayload";

    /**
     * The ID of the deleted webhook subscription.
     */
    public function selectDeletedWebhookSubscriptionId(): static
    {
        $this->selectField("deletedWebhookSubscriptionId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyWebhookSubscriptionDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
