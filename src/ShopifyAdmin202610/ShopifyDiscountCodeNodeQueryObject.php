<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `DiscountCodeNode` object enables you to manage [code discounts](https://help.shopify.com/manual/discounts/discount-types#discount-codes) that are applied when customers enter a code at checkout. For example, you can offer discounts where customers have to enter a code to redeem an amount off discount on products, variants, or collections in a store. Or, you can offer discounts where customers have to enter a code to get free shipping. Merchants can create and share discount codes individually with customers.
 *
 * Learn more about working with [Shopify's discount model](https://shopify.dev/docs/apps/build/discounts),
 * including related queries, mutations, limitations, and considerations.
 */
class ShopifyDiscountCodeNodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeNode";

    /**
     * The underlying code discount object.
     */
    public function selectCodeDiscount(?ShopifyDiscountCodeNodeCodeDiscountArgumentsObject $argsObject = null): ShopifyDiscountCodeUnionObject
    {
        $object = new ShopifyDiscountCodeUnionObject("codeDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The paginated list of events associated with the host subject.
     */
    public function selectEvents(?ShopifyDiscountCodeNodeEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyDiscountCodeNodeMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of metafield definitions.
     *
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(?ShopifyDiscountCodeNodeMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyDiscountCodeNodeMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
