<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutAndAccountsConfigurationBranding;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutAndAccountsConfigurationOverride;

/**
 * A checkout and account configuration packages branding settings, UI extensions, and overrides for a shop's checkout.
 */
class ShopifyCheckoutAndAccountsConfiguration implements ShopifyCheckoutAndAccountsConfigurationInterface, ShopifyNode
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
     * The branding configuration.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBranding
     */
    public function getBranding(): ?ShopifyCheckoutAndAccountsConfigurationBranding
    {
        return $this->branding;
    }

    
    /**
     * The date and time when the configuration was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The date and time when the configuration was last edited.
     *
     * @return Carbon
     */
    public function getEditedAt(): ?Carbon
    {
        return $this->editedAt;
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
     * Whether the configuration is published or not.
     *
     * @return bool
     */
    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
    }

    
    /**
     * The configuration name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The list of overrides for the configuration.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationOverride[]
     */
    public function getOverrides(): ?array
    {
        return $this->overrides;
    }

    
    /**
     * The date and time when the configuration was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
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
