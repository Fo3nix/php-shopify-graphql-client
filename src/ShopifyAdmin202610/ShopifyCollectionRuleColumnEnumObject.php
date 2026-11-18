<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Specifies the attribute of a product being used to populate the collection.
 */
class ShopifyCollectionRuleColumnEnumObject extends EnumObject
{
    /**
     * The [`tag`](https://shopify.dev/api/admin-graphql/latest/objects/Product#field-Product.fields.tags) attribute.
     */
    const TAG = "TAG";
    /**
     * The [`title`](https://shopify.dev/api/admin-graphql/latest/objects/Product#field-Product.fields.title) attribute.
     */
    const TITLE = "TITLE";
    /**
     * The [`type`](https://shopify.dev/api/admin-graphql/latest/objects/Product#field-Product.fields.productType) attribute.
     */
    const TYPE = "TYPE";
    /**
     * The [`product_taxonomy_node_id`](https://shopify.dev/api/admin-graphql/latest/objects/Product#field-Product.fields.productCategory) attribute.
     */
    const PRODUCT_TAXONOMY_NODE_ID = "PRODUCT_TAXONOMY_NODE_ID";
    /**
     * This rule type is designed to dynamically include products in a collection based on their category id.
     * When a specific product category is set as a condition, this rule will match products that are directly assigned to the specified category.
     */
    const PRODUCT_CATEGORY_ID = "PRODUCT_CATEGORY_ID";
    /**
     * This rule type is designed to dynamically include products in a collection based on their category id.
     * When a specific product category is set as a condition, this rule will not only match products that are
     * directly assigned to the specified category but also include any products categorized under any descendant of that category.
     */
    const PRODUCT_CATEGORY_ID_WITH_DESCENDANTS = "PRODUCT_CATEGORY_ID_WITH_DESCENDANTS";
    /**
     * The [`vendor`](https://shopify.dev/api/admin-graphql/latest/objects/Product#field-Product.fields.vendor) attribute.
     */
    const VENDOR = "VENDOR";
    /**
     * The [`variant_price`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-ProductVariant.fields.price) attribute.
     */
    const VARIANT_PRICE = "VARIANT_PRICE";
    /**
     * An attribute evaluated based on the `compare_at_price` attribute of the product's variants.
     * With `is_set` relation, the rule matches products with at least one variant with `compare_at_price` set.
     * With `is_not_set` relation, the rule matches products with at least one variant with `compare_at_price` not set.
     */
    const IS_PRICE_REDUCED = "IS_PRICE_REDUCED";
    /**
     * The [`variant_compare_at_price`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-ProductVariant.fields.compareAtPrice) attribute.
     */
    const VARIANT_COMPARE_AT_PRICE = "VARIANT_COMPARE_AT_PRICE";
    /**
     * The [`variant_weight`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-ProductVariant.fields.inventoryItem.measurement.weight) attribute.
     */
    const VARIANT_WEIGHT = "VARIANT_WEIGHT";
    /**
     * The [`variant_inventory`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-ProductVariant.fields.inventoryQuantity) attribute.
     */
    const VARIANT_INVENTORY = "VARIANT_INVENTORY";
    /**
     * The [`variant_title`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-ProductVariant.fields.title) attribute.
     */
    const VARIANT_TITLE = "VARIANT_TITLE";
    /**
     * This category includes metafield definitions that have the `useAsCollectionCondition` flag set to true.
     */
    const PRODUCT_METAFIELD_DEFINITION = "PRODUCT_METAFIELD_DEFINITION";
    /**
     * This category includes metafield definitions that have the `useAsCollectionCondition` flag set to true.
     */
    const VARIANT_METAFIELD_DEFINITION = "VARIANT_METAFIELD_DEFINITION";
}
