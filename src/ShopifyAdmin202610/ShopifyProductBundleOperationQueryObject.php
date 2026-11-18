<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An entity that represents details of an asynchronous
 * [ProductBundleCreate](https://shopify.dev/api/admin-graphql/current/mutations/productBundleCreate) or
 * [ProductBundleUpdate](https://shopify.dev/api/admin-graphql/current/mutations/productBundleUpdate) mutation.
 *
 * By querying this entity with the
 * [productOperation](https://shopify.dev/api/admin-graphql/current/queries/productOperation) query
 * using the ID that was returned when the bundle was created or updated, this can be used to check the status of an operation.
 *
 * The `status` field indicates whether the operation is `CREATED`, `ACTIVE`, or `COMPLETE`.
 *
 * The `product` field provides the details of the created or updated product.
 *
 * The `userErrors` field provides mutation errors that occurred during the operation.
 */
class ShopifyProductBundleOperationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleOperation";

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
    public function selectProduct(?ShopifyProductBundleOperationProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
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
    public function selectUserErrors(?ShopifyProductBundleOperationUserErrorsArgumentsObject $argsObject = null): ShopifyProductBundleMutationUserErrorQueryObject
    {
        $object = new ShopifyProductBundleMutationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
