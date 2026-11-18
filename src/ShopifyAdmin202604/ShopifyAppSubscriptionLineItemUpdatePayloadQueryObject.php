<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `appSubscriptionLineItemUpdate` mutation.
 */
class ShopifyAppSubscriptionLineItemUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionLineItemUpdatePayload";

    /**
     * The updated app subscription.
     */
    public function selectAppSubscription(?ShopifyAppSubscriptionLineItemUpdatePayloadAppSubscriptionArgumentsObject $argsObject = null): ShopifyAppSubscriptionQueryObject
    {
        $object = new ShopifyAppSubscriptionQueryObject("appSubscription");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The URL where the merchant approves or declines the updated app subscription line item.
     */
    public function selectConfirmationUrl(): static
    {
        $this->selectField("confirmationUrl");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAppSubscriptionLineItemUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
