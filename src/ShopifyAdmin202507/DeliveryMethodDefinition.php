<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryRateProvider;

class DeliveryMethodDefinition
{
    protected $active;
    protected $description;
    protected $id;
    protected $methodConditions;
    protected $name;
    protected $rateProvider;

    
    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return DeliveryCondition[]
     */
    public function getMethodConditions()
    {
        return $this->methodConditions;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return DeliveryRateProvider
     */
    public function getRateProvider()
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
                $instance->methodConditions = array_map(function($item) { return DeliveryCondition::fromArray($item); }, $data['methodConditions']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['rateProvider']) && $data['rateProvider'] !== null) {
                $instance->rateProvider = DeliveryRateProvider::fromArray($data['rateProvider']);
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
                $data['rateProvider'] = $this->rateProvider->asArray();
            }
            return $data;
        }
}
