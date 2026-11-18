<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The details about the app extension that's providing the
 * [discount type](https://help.shopify.com/manual/discounts/discount-types).
 * This information includes the app extension's name and
 * [client ID](https://shopify.dev/docs/apps/build/authentication-authorization/client-secrets),
 * [App Bridge configuration](https://shopify.dev/docs/api/app-bridge),
 * [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations),
 * [function ID](https://shopify.dev/docs/apps/build/functions/input-output/metafields-for-input-queries),
 * and other metadata about the discount type, including the discount type's name and description.
 */
class ShopifyAppDiscountTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppDiscountType";

    /**
     * The name of the app extension that's providing the
     * [discount type](https://help.shopify.com/manual/discounts/discount-types).
     */
    public function selectApp(?ShopifyAppDiscountTypeAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The [App Bridge configuration](https://shopify.dev/docs/api/app-bridge)
     * for the [discount type](https://help.shopify.com/manual/discounts/discount-types).
     */
    public function selectAppBridge(?ShopifyAppDiscountTypeAppBridgeArgumentsObject $argsObject = null): ShopifyFunctionsAppBridgeQueryObject
    {
        $object = new ShopifyFunctionsAppBridgeQueryObject("appBridge");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The [client ID](https://shopify.dev/docs/apps/build/authentication-authorization/client-secrets)
     * of the app extension that's providing the [discount type](https://help.shopify.com/manual/discounts/discount-types).
     */
    public function selectAppKey(): static
    {
        $this->selectField("appKey");

        return $this;
    }

    /**
     * A description of the
     * [discount type](https://help.shopify.com/manual/discounts/discount-types)
     * provided by the app extension.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that's used to control how discounts can be combined.
     *
     * @deprecated Use `discountClasses` instead.
     */
    public function selectDiscountClass(): static
    {
        $this->selectField("discountClass");

        return $this;
    }

    /**
     * The list of [discount classes](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that this app extension supports.
     */
    public function selectDiscountClasses(): static
    {
        $this->selectField("discountClasses");

        return $this;
    }

    /**
     * The
     * [function ID](https://shopify.dev/docs/apps/build/functions/input-output/metafields-for-input-queries)
     * associated with the app extension providing the
     * [discount type](https://help.shopify.com/manual/discounts/discount-types).
     */
    public function selectFunctionId(): static
    {
        $this->selectField("functionId");

        return $this;
    }

    /**
     * The type of line item on an order that the
     * [discount type](https://help.shopify.com/manual/discounts/discount-types) applies to.
     * Valid values: `SHIPPING_LINE` and `LINE_ITEM`.
     *
     * @deprecated Use `discountClasses` instead.
     */
    public function selectTargetType(): static
    {
        $this->selectField("targetType");

        return $this;
    }

    /**
     * The name of the [discount type](https://help.shopify.com/manual/discounts/discount-types)
     * that the app extension is providing.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
