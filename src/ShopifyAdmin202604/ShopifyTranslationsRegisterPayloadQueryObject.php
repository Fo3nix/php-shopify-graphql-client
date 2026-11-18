<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `translationsRegister` mutation.
 */
class ShopifyTranslationsRegisterPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "TranslationsRegisterPayload";

    /**
     * The translations that were created or updated.
     */
    public function selectTranslations(?ShopifyTranslationsRegisterPayloadTranslationsArgumentsObject $argsObject = null): ShopifyTranslationQueryObject
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
    public function selectUserErrors(?ShopifyTranslationsRegisterPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyTranslationUserErrorQueryObject
    {
        $object = new ShopifyTranslationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
