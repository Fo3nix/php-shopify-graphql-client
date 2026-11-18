<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * An interface representing asynchronous operations on products. Tracks the status and details of background product mutations like `productSet`, `productDelete`, `productDuplicate`, and `productBundle` operations. Provides status field (CREATED, ACTIVE, COMPLETE) and product field to monitor long-running product operations.
 */
class ShopifyProductOperationInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "ProductOperation";

    /**
     * The product on which the operation is being performed.
     */
    public function selectProduct(?ShopifyProductOperationProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
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

    public function onProductBundleOperation(): ShopifyProductBundleOperationQueryObject
    {
        $object = new ShopifyProductBundleOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductDeleteOperation(): ShopifyProductDeleteOperationQueryObject
    {
        $object = new ShopifyProductDeleteOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductDuplicateOperation(): ShopifyProductDuplicateOperationQueryObject
    {
        $object = new ShopifyProductDuplicateOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductSetOperation(): ShopifyProductSetOperationQueryObject
    {
        $object = new ShopifyProductSetOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
