<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `collectionConditionsSourceUpdate` mutation.
 */
class ShopifyCollectionConditionsSourceUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionsSourceUpdatePayload";

    /**
     * The updated collection source.
     */
    public function selectSource(?ShopifyCollectionConditionsSourceUpdatePayloadSourceArgumentsObject $argsObject = null): ShopifyCollectionConditionsSourceQueryObject
    {
        $object = new ShopifyCollectionConditionsSourceQueryObject("source");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCollectionConditionsSourceUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
