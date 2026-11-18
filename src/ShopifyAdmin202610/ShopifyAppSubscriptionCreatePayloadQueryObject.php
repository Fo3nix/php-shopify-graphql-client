<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `appSubscriptionCreate` mutation.
 */
class ShopifyAppSubscriptionCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionCreatePayload";

    /**
     * The newly-created app subscription.
     */
    public function selectAppSubscription(?ShopifyAppSubscriptionCreatePayloadAppSubscriptionArgumentsObject $argsObject = null): ShopifyAppSubscriptionQueryObject
    {
        $object = new ShopifyAppSubscriptionQueryObject("appSubscription");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The URL pointing to the page where the merchant approves or declines the charges for an app subscription.
     */
    public function selectConfirmationUrl(): static
    {
        $this->selectField("confirmationUrl");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAppSubscriptionCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
