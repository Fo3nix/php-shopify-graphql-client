<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Conditions that limit a rate group to specific collections or origin locations.
 *
 * When conditions are set, the rate group applies only to matching shipments.
 */
class ShopifyDeliveryRateGroupConditionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryRateGroupConditions";

    /**
     * Collections this rate group applies to. Null means the rate group applies to all products.
     */
    public function selectCollections(?ShopifyDeliveryRateGroupConditionsCollectionsArgumentsObject $argsObject = null): ShopifyCollectionConnectionQueryObject
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of collections this rate group applies to. Null when it applies to all products.
     */
    public function selectCollectionsCount(?ShopifyDeliveryRateGroupConditionsCollectionsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("collectionsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Origin locations this rate group applies to.
     */
    public function selectOriginLocations(?ShopifyDeliveryRateGroupConditionsOriginLocationsArgumentsObject $argsObject = null): ShopifyLocationConnectionQueryObject
    {
        $object = new ShopifyLocationConnectionQueryObject("originLocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of origin locations this rate group applies to.
     */
    public function selectOriginLocationsCount(?ShopifyDeliveryRateGroupConditionsOriginLocationsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("originLocationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
