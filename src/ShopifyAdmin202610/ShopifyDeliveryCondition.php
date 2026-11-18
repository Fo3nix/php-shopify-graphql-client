<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDeliveryConditionCriteriaHydrator;

/**
 * A condition that must pass for a delivery method definition to be applied to an order.
 */
class ShopifyDeliveryCondition implements ShopifyNode
{
    protected $conditionCriteria;
    protected $field;
    protected $id;
    protected $operator;

    
    /**
     * The value (weight or price) that the condition field is compared to.
     *
     * @return ShopifyMoneyV2|ShopifyWeight
     */
    public function getConditionCriteria(): ShopifyMoneyV2|ShopifyWeight|null
    {
        return $this->conditionCriteria;
    }

    
    /**
     * The field to compare the criterion value against, using the operator.
     *
     * @return string A ShopifyDeliveryConditionFieldEnumObject value
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The operator to compare the field and criterion value.
     *
     * @return string A ShopifyDeliveryConditionOperatorEnumObject value
     */
    public function getOperator(): ?string
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
                $instance->conditionCriteria = ShopifyDeliveryConditionCriteriaHydrator::fromArray($data['conditionCriteria']);
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
                $data['conditionCriteria'] = ShopifyDeliveryConditionCriteriaHydrator::toArray($this->conditionCriteria);
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
