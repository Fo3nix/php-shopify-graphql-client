<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCollectionRuleConditionsRuleObjectHydrator;

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
class ShopifyCollectionRuleConditions
{
    protected $allowedRelations;
    protected $defaultRelation;
    protected $ruleObject;
    protected $ruleType;

    
    /**
     * Allowed relations of the rule.
     *
     * @return string[] ShopifyCollectionRuleRelationEnumObject values
     */
    public function getAllowedRelations(): ?array
    {
        return $this->allowedRelations;
    }

    
    /**
     * Most commonly used relation for this rule.
     *
     * @return string A ShopifyCollectionRuleRelationEnumObject value
     */
    public function getDefaultRelation(): ?string
    {
        return $this->defaultRelation;
    }

    
    /**
     * Additional attributes defining the rule.
     *
     * @return ShopifyCollectionRuleMetafieldCondition
     */
    public function getRuleObject(): ?ShopifyCollectionRuleMetafieldCondition
    {
        return $this->ruleObject;
    }

    
    /**
     * Type of the rule.
     *
     * @return string A ShopifyCollectionRuleColumnEnumObject value
     */
    public function getRuleType(): ?string
    {
        return $this->ruleType;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['allowedRelations']) && $data['allowedRelations'] !== null) {
                $instance->allowedRelations = $data['allowedRelations'];
            }
            if (isset($data['defaultRelation']) && $data['defaultRelation'] !== null) {
                $instance->defaultRelation = $data['defaultRelation'];
            }
            if (isset($data['ruleObject']) && $data['ruleObject'] !== null) {
                $instance->ruleObject = ShopifyCollectionRuleConditionsRuleObjectHydrator::fromArray($data['ruleObject']);
            }
            if (isset($data['ruleType']) && $data['ruleType'] !== null) {
                $instance->ruleType = $data['ruleType'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->allowedRelations !== null) {
                $data['allowedRelations'] = $this->allowedRelations;
            }
            if ($this->defaultRelation !== null) {
                $data['defaultRelation'] = $this->defaultRelation;
            }
            if ($this->ruleObject !== null) {
                $data['ruleObject'] = ShopifyCollectionRuleConditionsRuleObjectHydrator::toArray($this->ruleObject);
            }
            if ($this->ruleType !== null) {
                $data['ruleType'] = $this->ruleType;
            }
            return $data;
        }
}
