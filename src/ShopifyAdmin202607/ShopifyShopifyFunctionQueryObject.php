<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyFunctionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyFunction";

    public function selectApiType()
    {
        $this->selectField("apiType");

        return $this;
    }

    public function selectApiVersion()
    {
        $this->selectField("apiVersion");

        return $this;
    }

    public function selectApp(ShopifyShopifyFunctionAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppBridge(ShopifyShopifyFunctionAppBridgeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFunctionsAppBridgeQueryObject("appBridge");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppKey()
    {
        $this->selectField("appKey");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInputQuery()
    {
        $this->selectField("inputQuery");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectUseCreationUi()
    {
        $this->selectField("useCreationUi");

        return $this;
    }
}
