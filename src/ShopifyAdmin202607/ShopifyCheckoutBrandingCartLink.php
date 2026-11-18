<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Controls the visibility of cart links displayed during checkout. These links allow customers to return to their cart or continue shopping.
 *
 * For example, an electronics store might hide cart links during final checkout steps to reduce distractions, or show them prominently to encourage customers to add accessories before completing their purchase.
 *
 * The `CartLink` object provides visibility settings to control when and how these navigation elements appear based on the merchant's checkout flow strategy.
 */
class ShopifyCheckoutBrandingCartLink
{
    protected $visibility;

    
    /**
     * Whether the cart link is visible at checkout.
     *
     * @return string A ShopifyCheckoutBrandingVisibilityEnumObject value
     */
    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['visibility']) && $data['visibility'] !== null) {
                $instance->visibility = $data['visibility'];
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
            if ($this->visibility !== null) {
                $data['visibility'] = $this->visibility;
            }
            return $data;
        }
}
