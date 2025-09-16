<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CollectionRuleConditionsRuleObject;

class CollectionRuleConditions
{
    protected $allowedRelations;
    protected $defaultRelation;
    protected $ruleObject;
    protected $ruleType;

    
    /**
     * @return CollectionRuleRelationEnumObject[]
     */
    public function getAllowedRelations()
    {
        return $this->allowedRelations;
    }

    
    /**
     * @return CollectionRuleRelationEnumObject
     */
    public function getDefaultRelation()
    {
        return $this->defaultRelation;
    }

    
    /**
     * @return CollectionRuleConditionsRuleObject
     */
    public function getRuleObject()
    {
        return $this->ruleObject;
    }

    
    /**
     * @return CollectionRuleColumnEnumObject
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
                $instance->ruleObject = CollectionRuleConditionsRuleObject::fromArray($data['ruleObject']);
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
