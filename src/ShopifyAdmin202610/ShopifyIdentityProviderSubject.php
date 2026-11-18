<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;

/**
 * Represents a customer's identity provider subject identifier.
 */
class ShopifyIdentityProviderSubject implements ShopifyNode
{
    protected $createdAt;
    protected $id;
    protected $providerName;
    protected $subject;
    protected $updatedAt;

    
    /**
     * The date and time when the provider subject was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * A globally-unique ID for the provider subject.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The merchant-configured name of the third-party identity provider.
     *
     * @return string
     */
    public function getProviderName(): ?string
    {
        return $this->providerName;
    }

    
    /**
     * The unique subject identifier assigned to the customer by the authentication provider.
     *
     * @return string
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    
    /**
     * The date and time when the provider subject was last updated.
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
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['providerName']) && $data['providerName'] !== null) {
                $instance->providerName = $data['providerName'];
            }
            if (isset($data['subject']) && $data['subject'] !== null) {
                $instance->subject = $data['subject'];
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->providerName !== null) {
                $data['providerName'] = $this->providerName;
            }
            if ($this->subject !== null) {
                $data['subject'] = $this->subject;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
