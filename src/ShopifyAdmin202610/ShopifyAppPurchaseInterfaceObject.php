<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Services and features purchased once by the store.
 */
class ShopifyAppPurchaseInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "AppPurchase";

    /**
     * The date and time when the app purchase occurred.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The name of the app purchase.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The amount to be charged to the store for the app purchase.
     */
    public function selectPrice(?ShopifyAppPurchasePriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the app purchase.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * Whether the app purchase is a test transaction.
     */
    public function selectTest(): static
    {
        $this->selectField("test");

        return $this;
    }

    public function onAppPurchaseOneTime(): ShopifyAppPurchaseOneTimeQueryObject
    {
        $object = new ShopifyAppPurchaseOneTimeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
