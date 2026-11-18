<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines the rules and selections for including products in a collection.
 */
class ShopifyCollectionSourceInclusionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusion";

    /**
     * The conditions that determine which products are included in the collection.
     */
    public function selectConditions(?ShopifyCollectionSourceInclusionConditionsArgumentsObject $argsObject = null): ShopifyCollectionSourceInclusionConditionInterfaceObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionInterfaceObject("conditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Specifies whether products must match any or all conditions. Only relevant when conditions are present.
     */
    public function selectMatchType(): static
    {
        $this->selectField("matchType");

        return $this;
    }

    /**
     * The products that have been manually selected for inclusion in the collection.
     */
    public function selectSelections(?ShopifyCollectionSourceInclusionSelectionsArgumentsObject $argsObject = null): ShopifyCollectionInclusionProductSelectionConnectionQueryObject
    {
        $object = new ShopifyCollectionInclusionProductSelectionConnectionQueryObject("selections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
