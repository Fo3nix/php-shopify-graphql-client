<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `collectionConditionsSourceCreate` mutation.
 */
class ShopifyCollectionConditionsSourceCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionsSourceCreatePayload";

    /**
     * The created collection source.
     */
    public function selectSource(?ShopifyCollectionConditionsSourceCreatePayloadSourceArgumentsObject $argsObject = null): ShopifyCollectionConditionsSourceQueryObject
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
    public function selectUserErrors(?ShopifyCollectionConditionsSourceCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
