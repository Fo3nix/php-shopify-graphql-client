<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCollectionSubCollectionEligibilityState;

/**
 * Whether a collection can be referenced as a sub-collection target by another collection's source. Use this to surface ineligible targets up front (with reasons).
 */
class ShopifyCollectionSubCollectionEligibility
{
    protected $exclusion;
    protected $inclusion;

    
    /**
     * Eligibility for use as an exclusion target of a sub-collection source.
     *
     * @return ShopifyCollectionSubCollectionEligibilityState
     */
    public function getExclusion(): ?ShopifyCollectionSubCollectionEligibilityState
    {
        return $this->exclusion;
    }

    
    /**
     * Eligibility for use as the inclusion target of a sub-collection source.
     *
     * @return ShopifyCollectionSubCollectionEligibilityState
     */
    public function getInclusion(): ?ShopifyCollectionSubCollectionEligibilityState
    {
        return $this->inclusion;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['exclusion']) && $data['exclusion'] !== null) {
                $instance->exclusion = ShopifyCollectionSubCollectionEligibilityState::fromArray($data['exclusion']);
            }
            if (isset($data['inclusion']) && $data['inclusion'] !== null) {
                $instance->inclusion = ShopifyCollectionSubCollectionEligibilityState::fromArray($data['inclusion']);
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
            if ($this->exclusion !== null) {
                $data['exclusion'] = $this->exclusion->asArray();
            }
            if ($this->inclusion !== null) {
                $data['inclusion'] = $this->inclusion->asArray();
            }
            return $data;
        }
}
