<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class PageInfo
{
    protected $endCursor;
    protected $hasNextPage;
    protected $hasPreviousPage;
    protected $startCursor;

    
    /**
     * @return string
     */
    public function getEndCursor()
    {
        return $this->endCursor;
    }

    
    /**
     * @return bool
     */
    public function getHasNextPage()
    {
        return $this->hasNextPage;
    }

    
    /**
     * @return bool
     */
    public function getHasPreviousPage()
    {
        return $this->hasPreviousPage;
    }

    
    /**
     * @return string
     */
    public function getStartCursor()
    {
        return $this->startCursor;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['endCursor']) && $data['endCursor'] !== null) {
                $instance->endCursor = $data['endCursor'];
            }
            if (isset($data['hasNextPage']) && $data['hasNextPage'] !== null) {
                $instance->hasNextPage = $data['hasNextPage'];
            }
            if (isset($data['hasPreviousPage']) && $data['hasPreviousPage'] !== null) {
                $instance->hasPreviousPage = $data['hasPreviousPage'];
            }
            if (isset($data['startCursor']) && $data['startCursor'] !== null) {
                $instance->startCursor = $data['startCursor'];
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
            if ($this->endCursor !== null) {
                $data['endCursor'] = $this->endCursor;
            }
            if ($this->hasNextPage !== null) {
                $data['hasNextPage'] = $this->hasNextPage;
            }
            if ($this->hasPreviousPage !== null) {
                $data['hasPreviousPage'] = $this->hasPreviousPage;
            }
            if ($this->startCursor !== null) {
                $data['startCursor'] = $this->startCursor;
            }
            return $data;
        }
}
