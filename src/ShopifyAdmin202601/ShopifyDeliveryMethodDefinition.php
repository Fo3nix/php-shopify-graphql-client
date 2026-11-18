<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDeliveryCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDeliveryRateProviderHydrator;

/**
 * A method definition contains the delivery rate and the conditions that must be met for the method to be
 * applied.
 */
class ShopifyDeliveryMethodDefinition implements ShopifyNode
{
    protected $active;
    protected $description;
    protected $id;
    protected $methodConditions;
    protected $name;
    protected $rateProvider;

    
    /**
     * Whether this method definition is active.
     *
     * @return bool
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    
    /**
     * The description of the method definition. Only available on shipping rates that are custom.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
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
     * The method conditions that must pass for this method definition to be applied to an order.
     *
     * @return ShopifyDeliveryCondition[]
     */
    public function getMethodConditions(): ?array
    {
        return $this->methodConditions;
    }

    
    /**
     * The name of the method definition.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The provided rate for this method definition, from a rate definition or participant.
     *
     * @return ShopifyDeliveryParticipant|ShopifyDeliveryRateDefinition
     */
    public function getRateProvider(): ShopifyDeliveryParticipant|ShopifyDeliveryRateDefinition|null
    {
        return $this->rateProvider;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['active']) && $data['active'] !== null) {
                $instance->active = $data['active'];
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['methodConditions']) && $data['methodConditions'] !== null) {
                $instance->methodConditions = array_map(function($item) { return ShopifyDeliveryCondition::fromArray($item); }, $data['methodConditions']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['rateProvider']) && $data['rateProvider'] !== null) {
                $instance->rateProvider = ShopifyDeliveryRateProviderHydrator::fromArray($data['rateProvider']);
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
            if ($this->active !== null) {
                $data['active'] = $this->active;
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->methodConditions !== null) {
                $data['methodConditions'] = array_map(function($item) { return $item->asArray(); }, $this->methodConditions);
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->rateProvider !== null) {
                $data['rateProvider'] = ShopifyDeliveryRateProviderHydrator::toArray($this->rateProvider);
            }
            return $data;
        }
}
