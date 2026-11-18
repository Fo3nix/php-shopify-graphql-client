<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productFeedDelete` mutation.
 */
class ShopifyProductFeedDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductFeedDeletePayload";

    /**
     * The ID of the product feed that was deleted.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductFeedDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductFeedDeleteUserErrorQueryObject
    {
        $object = new ShopifyProductFeedDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
