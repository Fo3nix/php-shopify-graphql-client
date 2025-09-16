<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingChoiceListGroup;

class CheckoutBrandingChoiceList
{
    protected $group;

    
    /**
     * @return CheckoutBrandingChoiceListGroup
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
                $instance->group = CheckoutBrandingChoiceListGroup::fromArray($data['group']);
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
