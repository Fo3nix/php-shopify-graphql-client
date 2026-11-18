<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `collectionDuplicate` mutation.
 */
class ShopifyCollectionDuplicatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionDuplicatePayload";

    /**
     * The newly created duplicate collection. Will contain all data if duplication completed synchronously.
     * If async processing is required, the collection will be created but products will be added in the background
     * and can be tracked via the job field or the collection's active_operations field.
     */
    public function selectCollection(?ShopifyCollectionDuplicatePayloadCollectionArgumentsObject $argsObject = null): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject("collection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The background job copying manually included products onto the target collection. Only returned if async processing is required, otherwise products will be copied synchronously when the collection is created.
     */
    public function selectJob(?ShopifyCollectionDuplicatePayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCollectionDuplicatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCollectionDuplicateUserErrorQueryObject
    {
        $object = new ShopifyCollectionDuplicateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
