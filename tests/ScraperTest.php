<?php

declare(strict_types=1);

namespace BVP\BiwakoScraper\Tests;

use BVP\BiwakoScraper\Scraper;
use BVP\BiwakoScraper\ScraperInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class ScraperTest extends TestCase
{
    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeForecastsProvider')]
    public function testScrapeForecasts(array $arguments, array $expected): void
    {
        $this->assertSame($expected, Scraper::scrapeForecasts(...$arguments));
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeTimesProvider')]
    public function testScrapeTimes(array $arguments, array $expected): void
    {
        $this->assertSame($expected, Scraper::scrapeTimes(...$arguments));
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

        Scraper::scrapeComments(1, '2024-01-09');
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

        Scraper::scrapeForecasts(1, '2024-01-09');
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

        Scraper::scrapeTimes(1, '2024-01-09');
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

        Scraper::invalid(1, '2024-01-09');
    }

    /**
     * @return void
     */
    public function testGetInstance(): void
    {
        Scraper::resetInstance();
        $this->assertInstanceOf(ScraperInterface::class, Scraper::getInstance());
    }

    /**
     * @return void
     */
    public function testCreateInstance(): void
    {
        Scraper::resetInstance();
        $this->assertInstanceOf(ScraperInterface::class, Scraper::createInstance());
    }

    /**
     * @return void
     */
    public function testResetInstance(): void
    {
        Scraper::resetInstance();
        $instance1 = Scraper::getInstance();
        Scraper::resetInstance();
        $instance2 = Scraper::getInstance();
        $this->assertNotSame($instance1, $instance2);
    }
}
