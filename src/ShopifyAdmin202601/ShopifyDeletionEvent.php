<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;

/**
 * Deletion events chronicle the destruction of resources (e.g. products and collections).
 * Once deleted, the deletion event is the only trace of the original's existence,
 * as the resource itself has been removed and can no longer be accessed.
 */
class ShopifyDeletionEvent
{
    protected $occurredAt;
    protected $subjectId;
    protected $subjectType;

    
    /**
     * The date and time when the deletion event for the related resource was generated.
     *
     * @return Carbon
     */
    public function getOccurredAt(): ?Carbon
    {
        return $this->occurredAt;
    }

    
    /**
     * The ID of the resource that was deleted.
     *
     * @return string
     */
    public function getSubjectId(): ?string
    {
        return $this->subjectId;
    }

    
    /**
     * The type of resource that was deleted.
     *
     * @return string A ShopifyDeletionEventSubjectTypeEnumObject value
     */
    public function getSubjectType(): ?string
    {
        return $this->subjectType;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['occurredAt']) && $data['occurredAt'] !== null) {
                $instance->occurredAt = new Carbon($data['occurredAt']);
            }
            if (isset($data['subjectId']) && $data['subjectId'] !== null) {
                $instance->subjectId = $data['subjectId'];
            }
            if (isset($data['subjectType']) && $data['subjectType'] !== null) {
                $instance->subjectType = $data['subjectType'];
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
            if ($this->occurredAt !== null) {
                $data['occurredAt'] = $this->occurredAt->toIso8601String();
            }
            if ($this->subjectId !== null) {
                $data['subjectId'] = $this->subjectId;
            }
            if ($this->subjectType !== null) {
                $data['subjectType'] = $this->subjectType;
            }
            return $data;
        }
}
