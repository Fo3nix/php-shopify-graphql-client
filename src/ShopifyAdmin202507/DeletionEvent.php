<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;

class DeletionEvent
{
    protected $occurredAt;
    protected $subjectId;
    protected $subjectType;

    
    /**
     * @return Carbon
     */
    public function getOccurredAt()
    {
        return $this->occurredAt;
    }

    
    /**
     * @return string
     */
    public function getSubjectId()
    {
        return $this->subjectId;
    }

    
    /**
     * @return DeletionEventSubjectTypeEnumObject
     */
    public function getSubjectType()
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
