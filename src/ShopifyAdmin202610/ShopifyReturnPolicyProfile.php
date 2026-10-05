<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyReturnPoliciesEditRules;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarket;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyReturnPoliciesReturnRules;
use Carbon\Carbon;

class ShopifyReturnPolicyProfile
{
    protected $default;
    protected $editRules;
    protected $id;
    protected $markets;
    protected $name;
    protected $returnRules;
    protected $updatedAt;

    
    /**
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    
    /**
     * @return ShopifyReturnPoliciesEditRules
     */
    public function getEditRules()
    {
        return $this->editRules;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyMarket[]
     */
    public function getMarkets()
    {
        return $this->markets;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return ShopifyReturnPoliciesReturnRules
     */
    public function getReturnRules()
    {
        return $this->returnRules;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['default']) && $data['default'] !== null) {
                $instance->default = $data['default'];
            }
            if (isset($data['editRules']) && $data['editRules'] !== null) {
                $instance->editRules = ShopifyReturnPoliciesEditRules::fromArray($data['editRules']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['markets']) && $data['markets'] !== null) {
                $instance->markets = array_map(function($item) { return ShopifyMarket::fromArray($item); }, $data['markets']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['returnRules']) && $data['returnRules'] !== null) {
                $instance->returnRules = ShopifyReturnPoliciesReturnRules::fromArray($data['returnRules']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->default !== null) {
                $data['default'] = $this->default;
            }
            if ($this->editRules !== null) {
                $data['editRules'] = $this->editRules->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->markets !== null) {
                $data['markets'] = array_map(function($item) { return $item->asArray(); }, $this->markets);
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->returnRules !== null) {
                $data['returnRules'] = $this->returnRules->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
