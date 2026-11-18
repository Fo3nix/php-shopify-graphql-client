<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderDelete` mutation.
 */
class ShopifyOrderDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderDeletePayload";

    /**
     * Deleted order ID.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyOrderDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderDeleteUserErrorQueryObject
    {
        $object = new ShopifyOrderDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
