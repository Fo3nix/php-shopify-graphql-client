<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingContainerDivider;

class ShopifyCheckoutBrandingContent
{
    protected $divider;

    
    /**
     * @return ShopifyCheckoutBrandingContainerDivider
     */
    public function getDivider()
    {
        return $this->divider;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['divider']) && $data['divider'] !== null) {
                $instance->divider = ShopifyCheckoutBrandingContainerDivider::fromArray($data['divider']);
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
            if ($this->divider !== null) {
                $data['divider'] = $this->divider->asArray();
            }
            return $data;
        }
}
