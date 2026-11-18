<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productBundleUpdate` mutation.
 */
class ShopifyProductBundleUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleUpdatePayload";

    /**
     * The asynchronous ProductBundleOperation updating the product bundle or componentized product.
     */
    public function selectProductBundleOperation(?ShopifyProductBundleUpdatePayloadProductBundleOperationArgumentsObject $argsObject = null): ShopifyProductBundleOperationQueryObject
    {
        $object = new ShopifyProductBundleOperationQueryObject("productBundleOperation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductBundleUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
