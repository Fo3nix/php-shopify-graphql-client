<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class FunctionsAppBridge
{
    protected $createPath;
    protected $detailsPath;

    
    /**
     * @return string
     */
    public function getCreatePath()
    {
        return $this->createPath;
    }

    
    /**
     * @return string
     */
    public function getDetailsPath()
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
