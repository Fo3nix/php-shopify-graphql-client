<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An entity that represents details of an asynchronous
 * [ProductDelete](https://shopify.dev/api/admin-graphql/current/mutations/productDelete) mutation.
 *
 * By querying this entity with the
 * [productOperation](https://shopify.dev/api/admin-graphql/current/queries/productOperation) query
 * using the ID that was returned when the product was deleted, this can be used to check the status of an operation.
 *
 * The `status` field indicates whether the operation is `CREATED`, `ACTIVE`, or `COMPLETE`.
 *
 * The `deletedProductId` field provides the ID of the deleted product.
 *
 * The `userErrors` field provides mutation errors that occurred during the operation.
 */
class ShopifyProductDeleteOperationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductDeleteOperation";

    /**
     * The ID of the deleted product.
     */
    public function selectDeletedProductId(): static
    {
        $this->selectField("deletedProductId");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The product on which the operation is being performed.
     */
    public function selectProduct(?ShopifyProductDeleteOperationProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of this operation.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * Returns mutation errors occurred during background mutation processing.
     */
    public function selectUserErrors(?ShopifyProductDeleteOperationUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
