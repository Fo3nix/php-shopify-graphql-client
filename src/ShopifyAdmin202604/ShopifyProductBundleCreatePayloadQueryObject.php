<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productBundleCreate` mutation.
 */
class ShopifyProductBundleCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleCreatePayload";

    /**
     * The asynchronous ProductBundleOperation creating the product bundle or componentized product.
     */
    public function selectProductBundleOperation(?ShopifyProductBundleCreatePayloadProductBundleOperationArgumentsObject $argsObject = null): ShopifyProductBundleOperationQueryObject
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
    public function selectUserErrors(?ShopifyProductBundleCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
