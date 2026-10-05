<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCollectionRuleConditionObject;

class ShopifyCollectionRule
{
    protected $column;
    protected $condition;
    protected $conditionObject;
    protected $relation;

    
    /**
     * @return ShopifyCollectionRuleColumnEnumObject
     */
    public function getColumn()
    {
        return $this->column;
    }

    
    /**
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    
    /**
     * @return ShopifyCollectionRuleConditionObject
     */
    public function getConditionObject()
    {
        return $this->conditionObject;
    }

    
    /**
     * @return ShopifyCollectionRuleRelationEnumObject
     */
    public function getRelation()
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
                $instance->conditionObject = ShopifyCollectionRuleConditionObject::fromArray($data['conditionObject']);
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
                $data['conditionObject'] = $this->conditionObject->asArray();
            }
            if ($this->relation !== null) {
                $data['relation'] = $this->relation;
            }
            return $data;
        }
}
