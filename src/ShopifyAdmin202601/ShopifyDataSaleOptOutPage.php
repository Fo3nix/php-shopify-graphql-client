<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * A shop's data sale opt out page.
 */
class ShopifyDataSaleOptOutPage
{
    protected $autoManaged;

    
    /**
     * If the data sale opt out page is auto managed.
     *
     * @return bool
     */
    public function getAutoManaged(): ?bool
    {
        return $this->autoManaged;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['autoManaged']) && $data['autoManaged'] !== null) {
                $instance->autoManaged = $data['autoManaged'];
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
            if ($this->autoManaged !== null) {
                $data['autoManaged'] = $this->autoManaged;
            }
            return $data;
        }
}
