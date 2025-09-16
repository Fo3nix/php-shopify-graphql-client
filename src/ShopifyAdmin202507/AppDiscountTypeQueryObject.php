<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppDiscountTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppDiscountType";

    public function selectApp(AppDiscountTypeAppArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppBridge(AppDiscountTypeAppBridgeArgumentsObject $argsObject = null)
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

    /**
     * @deprecated Use `discountClasses` instead.
     */
    public function selectDiscountClass()
    {
        $this->selectField("discountClass");

        return $this;
    }

    public function selectDiscountClasses()
    {
        $this->selectField("discountClasses");

        return $this;
    }

    public function selectFunctionId()
    {
        $this->selectField("functionId");

        return $this;
    }

    /**
     * @deprecated Use `discountClasses` instead.
     */
    public function selectTargetType()
    {
        $this->selectField("targetType");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
