<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;

class FunctionsErrorHistory
{
    protected $errorsFirstOccurredAt;
    protected $firstOccurredAt;
    protected $hasBeenSharedSinceLastError;
    protected $hasSharedRecentErrors;

    
    /**
     * @return Carbon
     */
    public function getErrorsFirstOccurredAt()
    {
        return $this->errorsFirstOccurredAt;
    }

    
    /**
     * @return Carbon
     */
    public function getFirstOccurredAt()
    {
        return $this->firstOccurredAt;
    }

    
    /**
     * @return bool
     */
    public function getHasBeenSharedSinceLastError()
    {
        return $this->hasBeenSharedSinceLastError;
    }

    
    /**
     * @return bool
     */
    public function getHasSharedRecentErrors()
    {
        return $this->hasSharedRecentErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['errorsFirstOccurredAt']) && $data['errorsFirstOccurredAt'] !== null) {
                $instance->errorsFirstOccurredAt = new Carbon($data['errorsFirstOccurredAt']);
            }
            if (isset($data['firstOccurredAt']) && $data['firstOccurredAt'] !== null) {
                $instance->firstOccurredAt = new Carbon($data['firstOccurredAt']);
            }
            if (isset($data['hasBeenSharedSinceLastError']) && $data['hasBeenSharedSinceLastError'] !== null) {
                $instance->hasBeenSharedSinceLastError = $data['hasBeenSharedSinceLastError'];
            }
            if (isset($data['hasSharedRecentErrors']) && $data['hasSharedRecentErrors'] !== null) {
                $instance->hasSharedRecentErrors = $data['hasSharedRecentErrors'];
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
            if ($this->errorsFirstOccurredAt !== null) {
                $data['errorsFirstOccurredAt'] = $this->errorsFirstOccurredAt->toIso8601String();
            }
            if ($this->firstOccurredAt !== null) {
                $data['firstOccurredAt'] = $this->firstOccurredAt->toIso8601String();
            }
            if ($this->hasBeenSharedSinceLastError !== null) {
                $data['hasBeenSharedSinceLastError'] = $this->hasBeenSharedSinceLastError;
            }
            if ($this->hasSharedRecentErrors !== null) {
                $data['hasSharedRecentErrors'] = $this->hasSharedRecentErrors;
            }
            return $data;
        }
}
