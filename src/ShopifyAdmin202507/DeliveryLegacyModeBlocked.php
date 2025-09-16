<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class DeliveryLegacyModeBlocked
{
    protected $blocked;
    protected $reasons;

    
    /**
     * @return bool
     */
    public function getBlocked()
    {
        return $this->blocked;
    }

    
    /**
     * @return DeliveryLegacyModeBlockedReasonEnumObject[]
     */
    public function getReasons()
    {
        return $this->reasons;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['blocked']) && $data['blocked'] !== null) {
                $instance->blocked = $data['blocked'];
            }
            if (isset($data['reasons']) && $data['reasons'] !== null) {
                $instance->reasons = $data['reasons'];
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
            if ($this->blocked !== null) {
                $data['blocked'] = $this->blocked;
            }
            if ($this->reasons !== null) {
                $data['reasons'] = $this->reasons;
            }
            return $data;
        }
}
