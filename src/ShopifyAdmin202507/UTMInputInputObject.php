<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class UTMInputInputObject extends InputObject
{
    protected $campaign;
    protected $source;
    protected $medium;

    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;

        return $this;
    }

    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    public function setMedium($medium)
    {
        $this->medium = $medium;

        return $this;
    }
}
