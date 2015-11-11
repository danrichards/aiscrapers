<?php

namespace Dan\AiScrapers\Scrapers;

use Dan\AiScrapers\AiScraper;

/**
 * Class ArticleScraper
 *
 * @package Dan\AiCrawler\Scrapers
 */
class ArticleScraper extends AiScraper {

    /**
     * Items with rules in the config file.
     *
     * @var array $items
     */
    protected $items = ['headline', 'content', 'image', 'author'];

    /**
     * This is a single purpose scraper so provide a URL when initializing.
     *
     * @param AiCrawler|html|url $html
     */
    public function __construct($html) {
        parent::__construct($html);
    }

    /**
     *
     *
     * @param null $item
     */
    public function handle($item = null) {
        if (is_null($item)) {
            foreach ($this->items as $i) {
                if ($rules = config("aicrawler.heuristics.blog.{$i}")) {
                    $this->scrape($rules);
                }
            }
        } elseif ($rules = config("aicrawler.heuristics.blog.{$item}")) {
            $this->scrape($rules);
        }
    }

    public function response()
    {

    }

}