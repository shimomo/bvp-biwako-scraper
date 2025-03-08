<?php

declare(strict_types=1);

namespace BVP\BiwakoScraper\Tests\Scrapers;

use BVP\BiwakoScraper\Scrapers\CommentScraper;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class CommentScraperTest extends TestCase
{
    /**
     * @var \BVP\BiwakoScraper\Scrapers\CommentScraper
     */
    protected CommentScraper $scraper;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->scraper = new CommentScraper();
    }

    /**
     * @return void
     */
    public function testScrapeWithRaceCode1AndDate20240109(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\BiwakoScraper\Scrapers\CommentScraper::scrape() - " .
            "The 'scrape' feature is currently not implemented."
        );

        $this->scraper->scrape(1, '2024-01-09');
    }

    /**
     * @return void
     */
    public function testInvalidWithRaceCode1AndDate20240109(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\BiwakoScraper\Scrapers\BaseScraper::__call() - " .
            "Call to undefined method 'BVP\BiwakoScraper\Scrapers\BaseScraper::invalid()'."
        );

        $this->scraper->invalid(1, '2024-01-09');
    }
}
