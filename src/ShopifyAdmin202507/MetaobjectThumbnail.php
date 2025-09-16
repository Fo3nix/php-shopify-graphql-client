<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class MetaobjectThumbnail
{
    protected $file;
    protected $hex;

    
    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    
    /**
     * @return string
     */
    public function getHex()
    {
        return $this->hex;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['file']) && $data['file'] !== null) {
                $instance->file = $data['file'];
            }
            if (isset($data['hex']) && $data['hex'] !== null) {
                $instance->hex = $data['hex'];
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
            if ($this->file !== null) {
                $data['file'] = $this->file;
            }
            if ($this->hex !== null) {
                $data['hex'] = $this->hex;
            }
            return $data;
        }
}
