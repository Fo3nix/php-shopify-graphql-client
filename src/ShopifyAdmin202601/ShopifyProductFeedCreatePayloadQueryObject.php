<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productFeedCreate` mutation.
 */
class ShopifyProductFeedCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductFeedCreatePayload";

    /**
     * The newly created product feed.
     */
    public function selectProductFeed(?ShopifyProductFeedCreatePayloadProductFeedArgumentsObject $argsObject = null): ShopifyProductFeedQueryObject
    {
        $object = new ShopifyProductFeedQueryObject("productFeed");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductFeedCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductFeedCreateUserErrorQueryObject
    {
        $object = new ShopifyProductFeedCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
