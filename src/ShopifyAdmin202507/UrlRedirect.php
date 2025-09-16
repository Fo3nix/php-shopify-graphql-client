<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class UrlRedirect
{
    protected $id;
    protected $path;
    protected $target;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    
    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['path']) && $data['path'] !== null) {
                $instance->path = $data['path'];
            }
            if (isset($data['target']) && $data['target'] !== null) {
                $instance->target = $data['target'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->path !== null) {
                $data['path'] = $this->path;
            }
            if ($this->target !== null) {
                $data['target'] = $this->target;
            }
            return $data;
        }
}
