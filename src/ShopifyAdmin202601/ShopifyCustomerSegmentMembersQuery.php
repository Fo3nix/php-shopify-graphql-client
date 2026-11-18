<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * A job to determine a list of members, such as customers, that are associated with an individual segment.
 */
class ShopifyCustomerSegmentMembersQuery implements ShopifyJobResult, ShopifyNode
{
    protected $currentCount;
    protected $done;
    protected $id;

    
    /**
     * The current total number of members in a given segment.
     *
     * @return int
     */
    public function getCurrentCount(): ?int
    {
        return $this->currentCount;
    }

    
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
