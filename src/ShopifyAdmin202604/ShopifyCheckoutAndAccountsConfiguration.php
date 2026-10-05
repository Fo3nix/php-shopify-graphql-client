<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutAndAccountsConfigurationBranding;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutAndAccountsConfigurationOverride;

class ShopifyCheckoutAndAccountsConfiguration
{
    protected $branding;
    protected $createdAt;
    protected $editedAt;
    protected $id;
    protected $isPublished;
    protected $name;
    protected $overrides;
    protected $updatedAt;

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBranding
     */
    public function getBranding()
    {
        return $this->branding;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return Carbon
     */
    public function getEditedAt()
    {
        return $this->editedAt;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationOverride[]
     */
    public function getOverrides()
    {
        return $this->overrides;
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
            if (isset($data['branding']) && $data['branding'] !== null) {
                $instance->branding = ShopifyCheckoutAndAccountsConfigurationBranding::fromArray($data['branding']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['editedAt']) && $data['editedAt'] !== null) {
                $instance->editedAt = new Carbon($data['editedAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['isPublished']) && $data['isPublished'] !== null) {
                $instance->isPublished = $data['isPublished'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['overrides']) && $data['overrides'] !== null) {
                $instance->overrides = array_map(function($item) { return ShopifyCheckoutAndAccountsConfigurationOverride::fromArray($item); }, $data['overrides']);
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
            if ($this->branding !== null) {
                $data['branding'] = $this->branding->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->editedAt !== null) {
                $data['editedAt'] = $this->editedAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->isPublished !== null) {
                $data['isPublished'] = $this->isPublished;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->overrides !== null) {
                $data['overrides'] = array_map(function($item) { return $item->asArray(); }, $this->overrides);
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
