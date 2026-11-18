<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Whether a collection can be referenced as a sub-collection target by another collection's source. Use this to surface ineligible targets up front (with reasons).
 */
class ShopifyCollectionSubCollectionEligibilityQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSubCollectionEligibility";

    /**
     * Eligibility for use as an exclusion target of a sub-collection source.
     */
    public function selectExclusion(?ShopifyCollectionSubCollectionEligibilityExclusionArgumentsObject $argsObject = null): ShopifyCollectionSubCollectionEligibilityStateQueryObject
    {
        $object = new ShopifyCollectionSubCollectionEligibilityStateQueryObject("exclusion");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Eligibility for use as the inclusion target of a sub-collection source.
     */
    public function selectInclusion(?ShopifyCollectionSubCollectionEligibilityInclusionArgumentsObject $argsObject = null): ShopifyCollectionSubCollectionEligibilityStateQueryObject
    {
        $object = new ShopifyCollectionSubCollectionEligibilityStateQueryObject("inclusion");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
