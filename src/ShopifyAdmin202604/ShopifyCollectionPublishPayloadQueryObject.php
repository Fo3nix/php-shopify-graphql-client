<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `collectionPublish` mutation.
 */
class ShopifyCollectionPublishPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionPublishPayload";

    /**
     * The published collection.
     */
    public function selectCollection(?ShopifyCollectionPublishPayloadCollectionArgumentsObject $argsObject = null): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject("collection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The channels where the collection has been published.
     */
    public function selectCollectionPublications(?ShopifyCollectionPublishPayloadCollectionPublicationsArgumentsObject $argsObject = null): ShopifyCollectionPublicationQueryObject
    {
        $object = new ShopifyCollectionPublicationQueryObject("collectionPublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop associated with the collection.
     */
    public function selectShop(?ShopifyCollectionPublishPayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
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
    public function selectUserErrors(?ShopifyCollectionPublishPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
