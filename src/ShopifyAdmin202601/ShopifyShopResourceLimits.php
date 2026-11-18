<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * Resource limits of a shop.
 */
class ShopifyShopResourceLimits
{
    protected $locationLimit;
    protected $maxProductOptions;
    protected $maxProductVariants;
    protected $redirectLimitReached;

    
    /**
     * Maximum number of locations allowed.
     *
     * @return int
     */
    public function getLocationLimit(): ?int
    {
        return $this->locationLimit;
    }

    
    /**
     * Maximum number of product options allowed.
     *
     * @return int
     */
    public function getMaxProductOptions(): ?int
    {
        return $this->maxProductOptions;
    }

    
    /**
     * The maximum number of variants allowed per product.
     *
     * @return int
     */
    public function getMaxProductVariants(): ?int
    {
        return $this->maxProductVariants;
    }

    
    /**
     * Whether the shop has reached the limit of the number of URL redirects it can make for resources.
     *
     * @return bool
     */
    public function getRedirectLimitReached(): ?bool
    {
        return $this->redirectLimitReached;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['locationLimit']) && $data['locationLimit'] !== null) {
                $instance->locationLimit = $data['locationLimit'];
            }
            if (isset($data['maxProductOptions']) && $data['maxProductOptions'] !== null) {
                $instance->maxProductOptions = $data['maxProductOptions'];
            }
            if (isset($data['maxProductVariants']) && $data['maxProductVariants'] !== null) {
                $instance->maxProductVariants = $data['maxProductVariants'];
            }
            if (isset($data['redirectLimitReached']) && $data['redirectLimitReached'] !== null) {
                $instance->redirectLimitReached = $data['redirectLimitReached'];
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
            if ($this->locationLimit !== null) {
                $data['locationLimit'] = $this->locationLimit;
            }
            if ($this->maxProductOptions !== null) {
                $data['maxProductOptions'] = $this->maxProductOptions;
            }
            if ($this->maxProductVariants !== null) {
                $data['maxProductVariants'] = $this->maxProductVariants;
            }
            if ($this->redirectLimitReached !== null) {
                $data['redirectLimitReached'] = $this->redirectLimitReached;
            }
            return $data;
        }
}
