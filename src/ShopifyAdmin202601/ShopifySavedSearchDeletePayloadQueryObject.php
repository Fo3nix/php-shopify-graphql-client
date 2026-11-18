<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `savedSearchDelete` mutation.
 */
class ShopifySavedSearchDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SavedSearchDeletePayload";

    /**
     * The ID of the saved search that was deleted.
     */
    public function selectDeletedSavedSearchId(): static
    {
        $this->selectField("deletedSavedSearchId");

        return $this;
    }

    /**
     * The shop of the saved search that was deleted.
     */
    public function selectShop(?ShopifySavedSearchDeletePayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
    {
        $object = new ShopifyShopQueryObject("shop");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySavedSearchDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
