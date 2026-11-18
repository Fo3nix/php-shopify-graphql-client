<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A Shopify Function.
 */
class ShopifyShopifyFunctionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyFunction";

    /**
     * The API type of the Shopify Function.
     */
    public function selectApiType(): static
    {
        $this->selectField("apiType");

        return $this;
    }

    /**
     * The API version of the Shopify Function.
     */
    public function selectApiVersion(): static
    {
        $this->selectField("apiVersion");

        return $this;
    }

    /**
     * The app that owns the Shopify Function.
     */
    public function selectApp(?ShopifyShopifyFunctionAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The App Bridge information for the Shopify Function.
     */
    public function selectAppBridge(?ShopifyShopifyFunctionAppBridgeArgumentsObject $argsObject = null): ShopifyFunctionsAppBridgeQueryObject
    {
        $object = new ShopifyFunctionsAppBridgeQueryObject("appBridge");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The client ID of the app that owns the Shopify Function.
     */
    public function selectAppKey(): static
    {
        $this->selectField("appKey");

        return $this;
    }

    /**
     * The description of the Shopify Function.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The handle of the Shopify Function.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * The ID of the Shopify Function.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The input query of the Shopify Function.
     */
    public function selectInputQuery(): static
    {
        $this->selectField("inputQuery");

        return $this;
    }

    /**
     * The title of the Shopify Function.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * If the Shopify Function uses the creation UI in the Admin.
     */
    public function selectUseCreationUi(): static
    {
        $this->selectField("useCreationUi");

        return $this;
    }
}
