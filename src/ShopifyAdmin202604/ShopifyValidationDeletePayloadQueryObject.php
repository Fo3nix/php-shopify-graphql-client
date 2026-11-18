<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `validationDelete` mutation.
 */
class ShopifyValidationDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ValidationDeletePayload";

    /**
     * Returns the deleted validation ID.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyValidationDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyValidationUserErrorQueryObject
    {
        $object = new ShopifyValidationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
