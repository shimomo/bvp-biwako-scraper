<?php

declare(strict_types=1);

namespace BVP\BiwakoScraper;

/**
 * @author shimomo
 */
interface ScraperInterface extends ScraperContractInterface
{
    /**
     * @param  \BVP\BiwakoScraper\ScraperCoreInterface
     * @return \BVP\BiwakoScraper\ScraperInterface
     */
    public static function getInstance(?ScraperCoreInterface $scraperCore = null): ScraperInterface;

    /**
     * @param  \BVP\BiwakoScraper\ScraperCoreInterface
     * @return \BVP\BiwakoScraper\ScraperInterface
     */
    public static function createInstance(?ScraperCoreInterface $scraperCore = null): ScraperInterface;

    /**
     * @return void
     */
    public static function resetInstance(): void;
}
