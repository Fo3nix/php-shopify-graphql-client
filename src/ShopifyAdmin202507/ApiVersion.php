<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ApiVersion
{
    protected $displayName;
    protected $handle;
    protected $supported;

    
    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    
    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    
    /**
     * @return bool
     */
    public function getSupported()
    {
        return $this->supported;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['supported']) && $data['supported'] !== null) {
                $instance->supported = $data['supported'];
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
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->supported !== null) {
                $data['supported'] = $this->supported;
            }
            return $data;
        }
}
