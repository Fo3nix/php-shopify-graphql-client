<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Represents a set of UTM parameters.
 */
class ShopifyUTMParameters
{
    protected $campaign;
    protected $content;
    protected $medium;
    protected $source;
    protected $term;

    
    /**
     * The name of a marketing campaign.
     *
     * @return string
     */
    public function getCampaign(): ?string
    {
        return $this->campaign;
    }

    
    /**
     * Identifies specific content in a marketing campaign. Used to differentiate between similar content or links in a marketing campaign to determine which is the most effective.
     *
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    
    /**
     * The medium of a marketing campaign, such as a banner or email newsletter.
     *
     * @return string
     */
    public function getMedium(): ?string
    {
        return $this->medium;
    }

    
    /**
     * The source of traffic to the merchant's store, such as Google or an email newsletter.
     *
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    
    /**
     * Paid search terms used by a marketing campaign.
     *
     * @return string
     */
    public function getTerm(): ?string
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
