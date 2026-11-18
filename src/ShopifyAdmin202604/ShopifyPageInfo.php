<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Returns information about pagination in a connection, in accordance with the
 * [Relay specification](https://relay.dev/graphql/connections.htm#sec-undefined.PageInfo).
 * For more information, please read our [GraphQL Pagination Usage Guide](https://shopify.dev/api/usage/pagination-graphql).
 */
class ShopifyPageInfo
{
    protected $endCursor;
    protected $hasNextPage;
    protected $hasPreviousPage;
    protected $startCursor;

    
    /**
     * The cursor corresponding to the last node in edges.
     *
     * @return string
     */
    public function getEndCursor(): ?string
    {
        return $this->endCursor;
    }

    
    /**
     * Whether there are more pages to fetch following the current page.
     *
     * @return bool
     */
    public function getHasNextPage(): ?bool
    {
        return $this->hasNextPage;
    }

    
    /**
     * Whether there are any pages prior to the current page.
     *
     * @return bool
     */
    public function getHasPreviousPage(): ?bool
    {
        return $this->hasPreviousPage;
    }

    
    /**
     * The cursor corresponding to the first node in edges.
     *
     * @return string
     */
    public function getStartCursor(): ?string
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
