<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `translationsRemove` mutation.
 */
class ShopifyTranslationsRemovePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "TranslationsRemovePayload";

    /**
     * The translations that were deleted.
     */
    public function selectTranslations(?ShopifyTranslationsRemovePayloadTranslationsArgumentsObject $argsObject = null): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyTranslationsRemovePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyTranslationUserErrorQueryObject
    {
        $object = new ShopifyTranslationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
