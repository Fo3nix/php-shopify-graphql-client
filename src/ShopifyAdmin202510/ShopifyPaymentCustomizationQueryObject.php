<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentCustomizationQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentCustomization";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }

    public function selectErrorHistory(ShopifyPaymentCustomizationErrorHistoryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFunctionsErrorHistoryQueryObject("errorHistory");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFunctionId()
    {
        $this->selectField("functionId");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMetafield(ShopifyPaymentCustomizationMetafieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(ShopifyPaymentCustomizationMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyPaymentCustomizationMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopifyFunction(ShopifyPaymentCustomizationShopifyFunctionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyFunctionQueryObject("shopifyFunction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
