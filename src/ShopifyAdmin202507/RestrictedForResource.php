<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class RestrictedForResource
{
    protected $restricted;
    protected $restrictedReason;

    
    /**
     * @return bool
     */
    public function getRestricted()
    {
        return $this->restricted;
    }

    
    /**
     * @return string
     */
    public function getRestrictedReason()
    {
        return $this->restrictedReason;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['restricted']) && $data['restricted'] !== null) {
                $instance->restricted = $data['restricted'];
            }
            if (isset($data['restrictedReason']) && $data['restrictedReason'] !== null) {
                $instance->restrictedReason = $data['restrictedReason'];
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
            if ($this->restricted !== null) {
                $data['restricted'] = $this->restricted;
            }
            if ($this->restrictedReason !== null) {
                $data['restrictedReason'] = $this->restrictedReason;
            }
            return $data;
        }
}
