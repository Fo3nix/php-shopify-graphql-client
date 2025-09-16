<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFunctionQueryObject extends QueryObject
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

    public function selectApp(ShopifyFunctionAppArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppBridge(ShopifyFunctionAppBridgeArgumentsObject $argsObject = null)
    {
        $object = new FunctionsAppBridgeQueryObject("appBridge");
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
