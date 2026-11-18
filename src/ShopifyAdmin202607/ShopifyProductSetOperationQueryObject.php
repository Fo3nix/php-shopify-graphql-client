<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An entity that represents details of an asynchronous
 * [ProductSet](https://shopify.dev/api/admin-graphql/current/mutations/productSet) mutation.
 *
 * By querying this entity with the
 * [productOperation](https://shopify.dev/api/admin-graphql/current/queries/productOperation) query
 * using the ID that was returned
 * [when the product was created or updated](https://shopify.dev/api/admin/migrate/new-product-model/sync-data#create-a-product-with-variants-and-options-asynchronously),
 * this can be used to check the status of an operation.
 *
 * The `status` field indicates whether the operation is `CREATED`, `ACTIVE`, or `COMPLETE`.
 *
 * The `product` field provides the details of the created or updated product.
 *
 * The `userErrors` field provides mutation errors that occurred during the operation.
 */
class ShopifyProductSetOperationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductSetOperation";

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
    public function selectProduct(?ShopifyProductSetOperationProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
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
    public function selectUserErrors(?ShopifyProductSetOperationUserErrorsArgumentsObject $argsObject = null): ShopifyProductSetUserErrorQueryObject
    {
        $object = new ShopifyProductSetUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
