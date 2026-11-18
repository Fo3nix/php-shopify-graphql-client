<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Represents a product duplication job.
 */
class ShopifyProductDuplicateJob
{
    protected $done;
    protected $id;

    
    /**
     * This indicates if the job is still queued or has been run.
     *
     * @return bool
     */
    public function getDone(): ?bool
    {
        return $this->done;
    }

    
    /**
     * A globally-unique ID that's returned when running an asynchronous mutation.
     *
     * @return string
     */
    public function getId(): ?string
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
            if ($this->done !== null) {
                $data['done'] = $this->done;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            return $data;
        }
}
