<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class RiskFact
{
    protected $description;
    protected $sentiment;

    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * @return RiskFactSentimentEnumObject
     */
    public function getSentiment()
    {
        return $this->sentiment;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['sentiment']) && $data['sentiment'] !== null) {
                $instance->sentiment = $data['sentiment'];
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
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->sentiment !== null) {
                $data['sentiment'] = $this->sentiment;
            }
            return $data;
        }
}
