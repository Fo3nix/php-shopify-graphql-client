<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines the available columns and relationships that can be used when creating rules for collections. This provides the schema for building automated collection logic based on product attributes.
 *
 * For example, merchants can create rules like "product type equals 'Shirts'" or "vendor contains 'Nike'" using the conditions defined in this object to automatically populate collections.
 *
 * Use `CollectionRuleConditions` to:
 * - Discovering valid field options for collection rule interfaces
 * - Understanding which conditions are available for automated collections
 * - Exploring available product attributes for collection automation
 * - Learning about proper field relationships for rule implementation
 *
 * The conditions define which product fields can be used in collection rules and what types of comparisons are allowed for each field.
 *
 * Learn more about [collections with conditions](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection).
 */
class ShopifyCollectionRuleConditionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleConditions";

    /**
     * Allowed relations of the rule.
     */
    public function selectAllowedRelations(): static
    {
        $this->selectField("allowedRelations");

        return $this;
    }

    /**
     * Most commonly used relation for this rule.
     */
    public function selectDefaultRelation(): static
    {
        $this->selectField("defaultRelation");

        return $this;
    }

    /**
     * Additional attributes defining the rule.
     */
    public function selectRuleObject(?ShopifyCollectionRuleConditionsRuleObjectArgumentsObject $argsObject = null): ShopifyCollectionRuleConditionsRuleObjectUnionObject
    {
        $object = new ShopifyCollectionRuleConditionsRuleObjectUnionObject("ruleObject");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Type of the rule.
     */
    public function selectRuleType(): static
    {
        $this->selectField("ruleType");

        return $this;
    }
}
