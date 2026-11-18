<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A flat rate group for a shipping option.
 *
 * Contains one fixed-price rate and optional collection or origin location conditions.
 */
class ShopifyDeliveryFlatRateGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryFlatRateGroup";

    /**
     * Conditions that limit this rate group to specific collections or origin locations.
     */
    public function selectConditions(?ShopifyDeliveryFlatRateGroupConditionsArgumentsObject $argsObject = null): ShopifyDeliveryRateGroupConditionsQueryObject
    {
        $object = new ShopifyDeliveryRateGroupConditionsQueryObject("conditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The fixed-price rate and optional transit time.
     */
    public function selectRate(?ShopifyDeliveryFlatRateGroupRateArgumentsObject $argsObject = null): ShopifyDeliveryFlatRateQueryObject
    {
        $object = new ShopifyDeliveryFlatRateQueryObject("rate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
