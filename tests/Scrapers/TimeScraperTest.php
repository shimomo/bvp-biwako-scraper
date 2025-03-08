<?php

declare(strict_types=1);

namespace BVP\BiwakoScraper\Tests\Scrapers;

use BVP\BiwakoScraper\Scrapers\TimeScraper;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class TimeScraperTest extends TestCase
{
    /**
     * @var \BVP\BiwakoScraper\Scrapers\TimeScraper
     */
    protected TimeScraper $scraper;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->scraper = new TimeScraper();
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(TimeScraperDataProvider::class, 'scrapeProvider')]
    public function testScrape(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrape(...$arguments));
    }

    /**
     * @return void
     */
    public function testScrapeWithRaceCode1AndDate20240109(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\BiwakoScraper\Scrapers\TimeScraper::scrape() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'https://www.boatrace-biwako.jp/modules/yosou/cyokuzen.php?day=20240109&race=1&kind=2'."
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
