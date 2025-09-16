<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class Vector3
{
    protected $x;
    protected $y;
    protected $z;

    
    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    
    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    
    /**
     * @return float
     */
    public function getZ()
    {
        return $this->z;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['x']) && $data['x'] !== null) {
                $instance->x = $data['x'];
            }
            if (isset($data['y']) && $data['y'] !== null) {
                $instance->y = $data['y'];
            }
            if (isset($data['z']) && $data['z'] !== null) {
                $instance->z = $data['z'];
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
            if ($this->x !== null) {
                $data['x'] = $this->x;
            }
            if ($this->y !== null) {
                $data['y'] = $this->y;
            }
            if ($this->z !== null) {
                $data['z'] = $this->z;
            }
            return $data;
        }
}
