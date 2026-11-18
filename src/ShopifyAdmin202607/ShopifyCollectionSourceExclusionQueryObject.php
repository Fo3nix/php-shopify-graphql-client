<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines the rules and selections for excluding products from a collection.
 */
class ShopifyCollectionSourceExclusionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceExclusion";

    /**
     * The conditions that determine which products are excluded from the collection.
     */
    public function selectConditions(?ShopifyCollectionSourceExclusionConditionsArgumentsObject $argsObject = null): ShopifyCollectionSourceExclusionConditionInterfaceObject
    {
        $object = new ShopifyCollectionSourceExclusionConditionInterfaceObject("conditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Specifies whether products must match any or all non-collection exclusion conditions. Collection exclusion
     * conditions are always applied independently with ANY semantics, so this field returns ANY for
     * collection-only exclusions and null when collection and non-collection exclusion conditions are mixed.
     */
    public function selectMatchType(): static
    {
        $this->selectField("matchType");

        return $this;
    }

    /**
     * The products that have been manually selected for exclusion from the collection.
     */
    public function selectSelections(?ShopifyCollectionSourceExclusionSelectionsArgumentsObject $argsObject = null): ShopifyCollectionExclusionProductSelectionConnectionQueryObject
    {
        $object = new ShopifyCollectionExclusionProductSelectionConnectionQueryObject("selections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
