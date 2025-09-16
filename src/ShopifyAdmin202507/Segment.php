<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;

class Segment
{
    protected $creationDate;
    protected $id;
    protected $lastEditDate;
    protected $name;

    
    /**
     * @return Carbon
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return Carbon
     */
    public function getLastEditDate()
    {
        return $this->lastEditDate;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['creationDate']) && $data['creationDate'] !== null) {
                $instance->creationDate = new Carbon($data['creationDate']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lastEditDate']) && $data['lastEditDate'] !== null) {
                $instance->lastEditDate = new Carbon($data['lastEditDate']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
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
            if ($this->creationDate !== null) {
                $data['creationDate'] = $this->creationDate->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lastEditDate !== null) {
                $data['lastEditDate'] = $this->lastEditDate->toIso8601String();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
