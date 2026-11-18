<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on collections for excluding products from a collection.
 */
class ShopifyCollectionSourceExclusionConditionCollectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceExclusionConditionCollection";

    /**
     * The unique identifier for this exclusion condition.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Collection exclusion conditions always match any referenced collection.
     */
    public function selectMatchType(): static
    {
        $this->selectField("matchType");

        return $this;
    }

    /**
     * The collection values whose products are excluded.
     */
    public function selectValues(?ShopifyCollectionSourceExclusionConditionCollectionValuesArgumentsObject $argsObject = null): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
