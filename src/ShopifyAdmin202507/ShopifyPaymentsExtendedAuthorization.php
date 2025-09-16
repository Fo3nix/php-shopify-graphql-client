<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;

class ShopifyPaymentsExtendedAuthorization
{
    protected $extendedAuthorizationExpiresAt;
    protected $standardAuthorizationExpiresAt;

    
    /**
     * @return Carbon
     */
    public function getExtendedAuthorizationExpiresAt()
    {
        return $this->extendedAuthorizationExpiresAt;
    }

    
    /**
     * @return Carbon
     */
    public function getStandardAuthorizationExpiresAt()
    {
        return $this->standardAuthorizationExpiresAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['extendedAuthorizationExpiresAt']) && $data['extendedAuthorizationExpiresAt'] !== null) {
                $instance->extendedAuthorizationExpiresAt = new Carbon($data['extendedAuthorizationExpiresAt']);
            }
            if (isset($data['standardAuthorizationExpiresAt']) && $data['standardAuthorizationExpiresAt'] !== null) {
                $instance->standardAuthorizationExpiresAt = new Carbon($data['standardAuthorizationExpiresAt']);
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
            if ($this->extendedAuthorizationExpiresAt !== null) {
                $data['extendedAuthorizationExpiresAt'] = $this->extendedAuthorizationExpiresAt->toIso8601String();
            }
            if ($this->standardAuthorizationExpiresAt !== null) {
                $data['standardAuthorizationExpiresAt'] = $this->standardAuthorizationExpiresAt->toIso8601String();
            }
            return $data;
        }
}
