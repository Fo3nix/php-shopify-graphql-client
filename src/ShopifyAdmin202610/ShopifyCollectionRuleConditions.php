<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionRuleConditionsRuleObject;

class ShopifyCollectionRuleConditions
{
    protected $allowedRelations;
    protected $defaultRelation;
    protected $ruleObject;
    protected $ruleType;

    
    /**
     * @return ShopifyCollectionRuleRelationEnumObject[]
     */
    public function getAllowedRelations()
    {
        return $this->allowedRelations;
    }

    
    /**
     * @return ShopifyCollectionRuleRelationEnumObject
     */
    public function getDefaultRelation()
    {
        return $this->defaultRelation;
    }

    
    /**
     * @return ShopifyCollectionRuleConditionsRuleObject
     */
    public function getRuleObject()
    {
        return $this->ruleObject;
    }

    
    /**
     * @return ShopifyCollectionRuleColumnEnumObject
     */
    public function getRuleType()
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
                $instance->ruleObject = ShopifyCollectionRuleConditionsRuleObject::fromArray($data['ruleObject']);
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
                $data['ruleObject'] = $this->ruleObject->asArray();
            }
            if ($this->ruleType !== null) {
                $data['ruleType'] = $this->ruleType;
            }
            return $data;
        }
}
