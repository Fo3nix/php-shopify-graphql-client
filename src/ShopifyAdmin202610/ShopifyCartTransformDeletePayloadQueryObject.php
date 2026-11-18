<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `cartTransformDelete` mutation.
 */
class ShopifyCartTransformDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartTransformDeletePayload";

    /**
     * The globally-unique ID for the deleted cart transform.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCartTransformDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCartTransformDeleteUserErrorQueryObject
    {
        $object = new ShopifyCartTransformDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
