<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class UTMParameters
{
    protected $campaign;
    protected $content;
    protected $medium;
    protected $source;
    protected $term;

    
    /**
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    
    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    
    /**
     * @return string
     */
    public function getMedium()
    {
        return $this->medium;
    }

    
    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    
    /**
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['campaign']) && $data['campaign'] !== null) {
                $instance->campaign = $data['campaign'];
            }
            if (isset($data['content']) && $data['content'] !== null) {
                $instance->content = $data['content'];
            }
            if (isset($data['medium']) && $data['medium'] !== null) {
                $instance->medium = $data['medium'];
            }
            if (isset($data['source']) && $data['source'] !== null) {
                $instance->source = $data['source'];
            }
            if (isset($data['term']) && $data['term'] !== null) {
                $instance->term = $data['term'];
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
            if ($this->campaign !== null) {
                $data['campaign'] = $this->campaign;
            }
            if ($this->content !== null) {
                $data['content'] = $this->content;
            }
            if ($this->medium !== null) {
                $data['medium'] = $this->medium;
            }
            if ($this->source !== null) {
                $data['source'] = $this->source;
            }
            if ($this->term !== null) {
                $data['term'] = $this->term;
            }
            return $data;
        }
}
