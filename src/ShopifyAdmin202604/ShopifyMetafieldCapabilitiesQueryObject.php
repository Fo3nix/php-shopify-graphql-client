<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Provides the capabilities of a metafield definition.
 */
class ShopifyMetafieldCapabilitiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldCapabilities";

    /**
     * Indicate whether a metafield definition is configured for filtering.
     */
    public function selectAdminFilterable(?ShopifyMetafieldCapabilitiesAdminFilterableArgumentsObject $argsObject = null): ShopifyMetafieldCapabilityAdminFilterableQueryObject
    {
        $object = new ShopifyMetafieldCapabilityAdminFilterableQueryObject("adminFilterable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Indicate whether a metafield definition can be queried in analytics.
     */
    public function selectAnalyticsQueryable(?ShopifyMetafieldCapabilitiesAnalyticsQueryableArgumentsObject $argsObject = null): ShopifyMetafieldCapabilityAnalyticsQueryableQueryObject
    {
        $object = new ShopifyMetafieldCapabilityAnalyticsQueryableQueryObject("analyticsQueryable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The capability configuration for automatically copying values from a cart metafield to the corresponding order metafield when an order is created.
     */
    public function selectCartToOrderCopyable(?ShopifyMetafieldCapabilitiesCartToOrderCopyableArgumentsObject $argsObject = null): ShopifyMetafieldCapabilityCartToOrderCopyableQueryObject
    {
        $object = new ShopifyMetafieldCapabilityCartToOrderCopyableQueryObject("cartToOrderCopyable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Indicate whether a metafield definition can be used as a smart collection condition.
     */
    public function selectSmartCollectionCondition(?ShopifyMetafieldCapabilitiesSmartCollectionConditionArgumentsObject $argsObject = null): ShopifyMetafieldCapabilitySmartCollectionConditionQueryObject
    {
        $object = new ShopifyMetafieldCapabilitySmartCollectionConditionQueryObject("smartCollectionCondition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Indicate whether the metafield values for a metafield definition are required to be unique.
     */
    public function selectUniqueValues(?ShopifyMetafieldCapabilitiesUniqueValuesArgumentsObject $argsObject = null): ShopifyMetafieldCapabilityUniqueValuesQueryObject
    {
        $object = new ShopifyMetafieldCapabilityUniqueValuesQueryObject("uniqueValues");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
