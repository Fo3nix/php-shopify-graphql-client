<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CustomerSegmentMembersQuery
{
    protected $currentCount;
    protected $done;
    protected $id;

    
    /**
     * @return int
     */
    public function getCurrentCount()
    {
        return $this->currentCount;
    }

    
    /**
     * @return bool
     */
    public function getDone()
    {
        return $this->done;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['currentCount']) && $data['currentCount'] !== null) {
                $instance->currentCount = $data['currentCount'];
            }
            if (isset($data['done']) && $data['done'] !== null) {
                $instance->done = $data['done'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
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
            if ($this->currentCount !== null) {
                $data['currentCount'] = $this->currentCount;
            }
            if ($this->done !== null) {
                $data['done'] = $this->done;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            return $data;
        }
}
