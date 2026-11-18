<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `collectionConditionsSourceDelete` mutation.
 */
class ShopifyCollectionConditionsSourceDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionsSourceDeletePayload";

    /**
     * The ID of the deleted collection source.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCollectionConditionsSourceDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
