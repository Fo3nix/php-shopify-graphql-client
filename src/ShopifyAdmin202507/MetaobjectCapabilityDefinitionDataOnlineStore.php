<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class MetaobjectCapabilityDefinitionDataOnlineStore
{
    protected $canCreateRedirects;
    protected $urlHandle;

    
    /**
     * @return bool
     */
    public function getCanCreateRedirects()
    {
        return $this->canCreateRedirects;
    }

    
    /**
     * @return string
     */
    public function getUrlHandle()
    {
        return $this->urlHandle;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['canCreateRedirects']) && $data['canCreateRedirects'] !== null) {
                $instance->canCreateRedirects = $data['canCreateRedirects'];
            }
            if (isset($data['urlHandle']) && $data['urlHandle'] !== null) {
                $instance->urlHandle = $data['urlHandle'];
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
            if ($this->canCreateRedirects !== null) {
                $data['canCreateRedirects'] = $this->canCreateRedirects;
            }
            if ($this->urlHandle !== null) {
                $data['urlHandle'] = $this->urlHandle;
            }
            return $data;
        }
}
