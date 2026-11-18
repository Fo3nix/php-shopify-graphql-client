<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `validationUpdate` mutation.
 */
class ShopifyValidationUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ValidationUpdatePayload";

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyValidationUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyValidationUserErrorQueryObject
    {
        $object = new ShopifyValidationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The updated validation.
     */
    public function selectValidation(?ShopifyValidationUpdatePayloadValidationArgumentsObject $argsObject = null): ShopifyValidationQueryObject
    {
        $object = new ShopifyValidationQueryObject("validation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
