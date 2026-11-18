<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionRuleConditionObjectHydrator;

/**
 * Represents at rule that's used to assign products to a collection.
 */
class ShopifyCollectionRule
{
    protected $column;
    protected $condition;
    protected $conditionObject;
    protected $relation;

    
    /**
     * The attribute that the rule focuses on. For example, `title` or `product_type`.
     *
     * @return string A ShopifyCollectionRuleColumnEnumObject value
     */
    public function getColumn(): ?string
    {
        return $this->column;
    }

    
    /**
     * The value that the operator is applied to. For example, `Hats`.
     *
     * @return string
     */
    public function getCondition(): ?string
    {
        return $this->condition;
    }

    
    /**
     * The value that the operator is applied to.
     *
     * @return ShopifyCollectionRuleCategoryCondition|ShopifyCollectionRuleMetafieldCondition|ShopifyCollectionRuleProductCategoryCondition|ShopifyCollectionRuleTextCondition
     */
    public function getConditionObject(): ShopifyCollectionRuleCategoryCondition|ShopifyCollectionRuleMetafieldCondition|ShopifyCollectionRuleProductCategoryCondition|ShopifyCollectionRuleTextCondition|null
    {
        return $this->conditionObject;
    }

    
    /**
     * The type of operator that the rule is based on. For example, `equals`, `contains`, or `not_equals`.
     *
     * @return string A ShopifyCollectionRuleRelationEnumObject value
     */
    public function getRelation(): ?string
    {
        return $this->relation;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['column']) && $data['column'] !== null) {
                $instance->column = $data['column'];
            }
            if (isset($data['condition']) && $data['condition'] !== null) {
                $instance->condition = $data['condition'];
            }
            if (isset($data['conditionObject']) && $data['conditionObject'] !== null) {
                $instance->conditionObject = ShopifyCollectionRuleConditionObjectHydrator::fromArray($data['conditionObject']);
            }
            if (isset($data['relation']) && $data['relation'] !== null) {
                $instance->relation = $data['relation'];
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
            if ($this->column !== null) {
                $data['column'] = $this->column;
            }
            if ($this->condition !== null) {
                $data['condition'] = $this->condition;
            }
            if ($this->conditionObject !== null) {
                $data['conditionObject'] = ShopifyCollectionRuleConditionObjectHydrator::toArray($this->conditionObject);
            }
            if ($this->relation !== null) {
                $data['relation'] = $this->relation;
            }
            return $data;
        }
}
