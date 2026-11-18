<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The information for [line items](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) that are part of a bundle. When a bundle is purchased, each component line item references its [`LineItemGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItemGroup) through the [`lineItemGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem#field-lineItemGroup) field to maintain the relationship with the bundle.
 *
 * The parent bundle's product, variant, and custom attributes enable apps to group and display bundle components in order management systems, transactional emails, and other contexts where understanding the bundle structure is needed.
 *
 * Learn more about [product bundles](https://shopify.dev/docs/apps/build/product-merchandising/bundles).
 */
class ShopifyLineItemGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "LineItemGroup";

    /**
     * A list of attributes that represent custom features or special requests.
     */
    public function selectCustomAttributes(?ShopifyLineItemGroupCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
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
     * ID of the product of the line item group.
     */
    public function selectProductId(): static
    {
        $this->selectField("productId");

        return $this;
    }

    /**
     * Quantity of the line item group on the order.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * Title of the line item group.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * ID of the variant of the line item group.
     */
    public function selectVariantId(): static
    {
        $this->selectField("variantId");

        return $this;
    }

    /**
     * SKU of the variant of the line item group.
     */
    public function selectVariantSku(): static
    {
        $this->selectField("variantSku");

        return $this;
    }
}
