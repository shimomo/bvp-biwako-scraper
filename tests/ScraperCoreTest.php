<?php

declare(strict_types=1);

namespace BVP\BiwakoScraper\Tests;

use BVP\BiwakoScraper\ScraperCore;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class ScraperCoreTest extends TestCase
{
    /**
     * @var \BVP\BiwakoScraper\ScraperCore
     */
    protected ScraperCore $scraper;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->scraper = new ScraperCore();
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeForecastsProvider')]
    public function testScrapeForecasts(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrapeForecasts(...$arguments));
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeTimesProvider')]
    public function testScrapeTimes(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrapeTimes(...$arguments));
    }

    /**
     * @return void
     */
    public function testScrapeCommentsWithRaceCode1AndDate20240109(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\BiwakoScraper\Scrapers\CommentScraper::scrape() - " .
            "The 'scrape' feature is currently not implemented."
        );

        $this->scraper->scrapeComments(1, '2024-01-09');
    }

    /**
     * @return void
     */
    public function testScrapeForecastsWithRaceCode1AndDate20240109(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\BiwakoScraper\Scrapers\ForecastScraper::scrapeYesterday() - " .
            "The specified key '.sinnyu-div > ul > li.num' is not found in the content of the URL: " .
            "'https://www.boatrace-biwako.jp/modules/yosou/syussou.php?day=20240109&race=1'."
        );

        $this->scraper->scrapeForecasts(1, '2024-01-09');
    }

    /**
     * @return void
     */
    public function testScrapeTimesWithRaceCode1AndDate20240109(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\BiwakoScraper\Scrapers\TimeScraper::scrape() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'https://www.boatrace-biwako.jp/modules/yosou/cyokuzen.php?day=20240109&race=1&kind=2'."
        );

        $this->scraper->scrapeTimes(1, '2024-01-09');
    }

    /**
     * @return void
     */
    public function testInvalidWithRaceCode1AndDate20240109(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\BiwakoScraper\ScraperCore::__call() - " .
            "Call to undefined method 'BVP\BiwakoScraper\ScraperCore::invalid()'."
        );

        $this->scraper->invalid(1, '2024-01-09');
    }
}
