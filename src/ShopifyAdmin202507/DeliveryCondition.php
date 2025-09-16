<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryConditionCriteria;

class DeliveryCondition
{
    protected $conditionCriteria;
    protected $field;
    protected $id;
    protected $operator;

    
    /**
     * @return DeliveryConditionCriteria
     */
    public function getConditionCriteria()
    {
        return $this->conditionCriteria;
    }

    
    /**
     * @return DeliveryConditionFieldEnumObject
     */
    public function getField()
    {
        return $this->field;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return DeliveryConditionOperatorEnumObject
     */
    public function getOperator()
    {
        return $this->operator;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['conditionCriteria']) && $data['conditionCriteria'] !== null) {
                $instance->conditionCriteria = DeliveryConditionCriteria::fromArray($data['conditionCriteria']);
            }
            if (isset($data['field']) && $data['field'] !== null) {
                $instance->field = $data['field'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['operator']) && $data['operator'] !== null) {
                $instance->operator = $data['operator'];
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
            if ($this->conditionCriteria !== null) {
                $data['conditionCriteria'] = $this->conditionCriteria->asArray();
            }
            if ($this->field !== null) {
                $data['field'] = $this->field;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->operator !== null) {
                $data['operator'] = $this->operator;
            }
            return $data;
        }
}
