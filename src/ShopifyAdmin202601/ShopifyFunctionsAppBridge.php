<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * The App Bridge information for a Shopify Function.
 */
class ShopifyFunctionsAppBridge
{
    protected $createPath;
    protected $detailsPath;

    
    /**
     * The relative path for creating a customization.
     *
     * @return string
     */
    public function getCreatePath(): ?string
    {
        return $this->createPath;
    }

    
    /**
     * The relative path for viewing a customization.
     *
     * @return string
     */
    public function getDetailsPath(): ?string
    {
        return $this->detailsPath;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['createPath']) && $data['createPath'] !== null) {
                $instance->createPath = $data['createPath'];
            }
            if (isset($data['detailsPath']) && $data['detailsPath'] !== null) {
                $instance->detailsPath = $data['detailsPath'];
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
            if ($this->createPath !== null) {
                $data['createPath'] = $this->createPath;
            }
            if ($this->detailsPath !== null) {
                $data['detailsPath'] = $this->detailsPath;
            }
            return $data;
        }
}
