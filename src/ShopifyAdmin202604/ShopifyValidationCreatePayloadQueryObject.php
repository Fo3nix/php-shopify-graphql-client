<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `validationCreate` mutation.
 */
class ShopifyValidationCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ValidationCreatePayload";

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyValidationCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyValidationUserErrorQueryObject
    {
        $object = new ShopifyValidationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The created validation.
     */
    public function selectValidation(?ShopifyValidationCreatePayloadValidationArgumentsObject $argsObject = null): ShopifyValidationQueryObject
    {
        $object = new ShopifyValidationQueryObject("validation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
