<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `collectionDelete` mutation.
 */
class ShopifyCollectionDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionDeletePayload";

    /**
     * The ID of the collection that was deleted. Returns `null` if the collection doesn't exist.
     */
    public function selectDeletedCollectionId(): static
    {
        $this->selectField("deletedCollectionId");

        return $this;
    }

    /**
     * The shop associated with the collection.
     */
    public function selectShop(?ShopifyCollectionDeletePayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
    {
        $object = new ShopifyShopQueryObject("shop");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCollectionDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
