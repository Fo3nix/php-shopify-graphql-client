<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `appPurchaseOneTimeCreate` mutation.
 */
class ShopifyAppPurchaseOneTimeCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppPurchaseOneTimeCreatePayload";

    /**
     * The newly created app one-time purchase.
     */
    public function selectAppPurchaseOneTime(?ShopifyAppPurchaseOneTimeCreatePayloadAppPurchaseOneTimeArgumentsObject $argsObject = null): ShopifyAppPurchaseOneTimeQueryObject
    {
        $object = new ShopifyAppPurchaseOneTimeQueryObject("appPurchaseOneTime");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The URL that the merchant can access to approve or decline the newly created app one-time purchase.
     *
     * If the merchant declines, then the merchant is redirected to the app and receives a notification message stating that the charge was declined.
     * If the merchant approves and they're successfully invoiced, then the state of the charge changes from `pending` to `active`.
     *
     * You get paid after the charge is activated.
     */
    public function selectConfirmationUrl(): static
    {
        $this->selectField("confirmationUrl");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAppPurchaseOneTimeCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
