<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListGroup;

class ShopifyCheckoutAndAccountsConfigurationBrandingChoiceList
{
    protected $group;

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListGroup
     */
    public function getGroup()
    {
        return $this->group;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['group']) && $data['group'] !== null) {
                $instance->group = ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListGroup::fromArray($data['group']);
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
            if ($this->group !== null) {
                $data['group'] = $this->group->asArray();
            }
            return $data;
        }
}
