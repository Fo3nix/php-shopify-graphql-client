<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class BlogFeed
{
    protected $location;
    protected $path;

    
    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    
    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = $data['location'];
            }
            if (isset($data['path']) && $data['path'] !== null) {
                $instance->path = $data['path'];
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
            if ($this->location !== null) {
                $data['location'] = $this->location;
            }
            if ($this->path !== null) {
                $data['path'] = $this->path;
            }
            return $data;
        }
}
