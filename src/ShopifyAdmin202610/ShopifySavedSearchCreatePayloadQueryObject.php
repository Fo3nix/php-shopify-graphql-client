<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `savedSearchCreate` mutation.
 */
class ShopifySavedSearchCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SavedSearchCreatePayload";

    /**
     * The saved search that was created.
     */
    public function selectSavedSearch(?ShopifySavedSearchCreatePayloadSavedSearchArgumentsObject $argsObject = null): ShopifySavedSearchQueryObject
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
    public function selectUserErrors(?ShopifySavedSearchCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
