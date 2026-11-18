<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `shopResourceFeedbackCreate` mutation.
 */
class ShopifyShopResourceFeedbackCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopResourceFeedbackCreatePayload";

    /**
     * The shop feedback that's created. Returns `null` when `state: ACCEPTED` is used, because setting state to `ACCEPTED` clears the active feedback signal. A `null` value here indicates success, not an error.
     */
    public function selectFeedback(?ShopifyShopResourceFeedbackCreatePayloadFeedbackArgumentsObject $argsObject = null): ShopifyAppFeedbackQueryObject
    {
        $object = new ShopifyAppFeedbackQueryObject("feedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyShopResourceFeedbackCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyShopResourceFeedbackCreateUserErrorQueryObject
    {
        $object = new ShopifyShopResourceFeedbackCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
