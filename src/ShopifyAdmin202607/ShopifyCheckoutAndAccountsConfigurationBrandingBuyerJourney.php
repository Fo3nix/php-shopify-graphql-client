<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The customizations for the breadcrumbs that represent a buyer's journey to the checkout.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingBuyerJourney
{
    protected $visibility;

    
    /**
     * An option to display or hide the breadcrumbs that represent the buyer's journey on 3-page checkout.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingVisibilityEnumObject value
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
