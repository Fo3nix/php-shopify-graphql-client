<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `savedSearchUpdate` mutation.
 */
class ShopifySavedSearchUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SavedSearchUpdatePayload";

    /**
     * The saved search that was updated.
     */
    public function selectSavedSearch(?ShopifySavedSearchUpdatePayloadSavedSearchArgumentsObject $argsObject = null): ShopifySavedSearchQueryObject
    {
        $object = new ShopifySavedSearchQueryObject("savedSearch");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySavedSearchUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
