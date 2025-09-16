<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OnlineStorePasswordProtection;

class OnlineStore
{
    protected $passwordProtection;

    
    /**
     * @return OnlineStorePasswordProtection
     */
    public function getPasswordProtection()
    {
        return $this->passwordProtection;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['passwordProtection']) && $data['passwordProtection'] !== null) {
                $instance->passwordProtection = OnlineStorePasswordProtection::fromArray($data['passwordProtection']);
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
            if ($this->passwordProtection !== null) {
                $data['passwordProtection'] = $this->passwordProtection->asArray();
            }
            return $data;
        }
}
