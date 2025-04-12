<?php

declare(strict_types=1);

namespace BVP\BiwakoScraper\Scrapers;

use BVP\ScraperCore\Normalizer;
use BVP\ScraperCore\Scraper;
use Carbon\CarbonImmutable as Carbon;
use Carbon\CarbonInterface;

/**
 * @author shimomo
 */
class ForecastScraper extends BaseScraper
{
    /**
     * @param  string|int                           $raceNumber
     * @param  \Carbon\CarbonInterface|string|null  $raceDate
     * @return array
     */
    public function scrape(string|int $raceNumber, CarbonInterface|string|null $raceDate = null): array
    {
        return array_merge(...[
            $this->scrapeYesterday($raceNumber, $raceDate),
            $this->scrapeToday($raceNumber, $raceDate),
        ]);
    }

    /**
     * @param  string|int                           $raceNumber
     * @param  \Carbon\CarbonInterface|string|null  $raceDate
     * @return array
     *
     * @throws \RuntimeException
     */
    private function scrapeYesterday(string|int $raceNumber, CarbonInterface|string|null $raceDate = null): array
    {
        $raceDate = Carbon::parse($raceDate ?? 'today')->format('Ymd');
        $crawlerUrl = sprintf($this->baseUrl, 'syussou', $raceDate, $raceNumber, '');
        $crawler = Scraper::getInstance()->request('GET', $crawlerUrl);
        $forecasts = Scraper::filterByKeys($crawler, [
            '.sinnyu-div > ul > li.num',
            '.comment-div',
            '.focus > li',
        ]);

        foreach ($forecasts as $key => $value) {
            if (empty($value)) {
                throw new \RuntimeException(
                    __METHOD__ . "() - The specified key '{$key}' is not found " .
                    "in the content of the URL: '{$crawlerUrl}'."
                );
            }
        }

        $reporterYesterdayCommentLabel = '記者予想 前日コメント';
        $reporterYesterdayCourseLabel = '記者予想 前日コース';
        $reporterYesterdayFocusLabel = '記者予想 前日フォーカス';
        $reporterYesterdayFocusExactaLabel = '記者予想 前日フォーカス 2連単';
        $reporterYesterdayFocusTrifectaLabel = '記者予想 前日フォーカス 3連単';

        $reporterYesterdayComment = Normalizer::normalize($forecasts['.comment-div'][0]);
        $reporterYesterdayCourse = Normalizer::normalize(implode($forecasts['.sinnyu-div > ul > li.num']));
        $reporterYesterdayFocus = Normalizer::normalize($forecasts['.focus > li']);
        $reporterYesterdayFocusExacta = [];
        $reporterYesterdayFocusTrifecta = Normalizer::normalize($forecasts['.focus > li']);

        return [
            'reporter_yesterday_comment_label' => $reporterYesterdayCommentLabel,
            'reporter_yesterday_comment' => $reporterYesterdayComment,
            'reporter_yesterday_course_label' => $reporterYesterdayCourseLabel,
            'reporter_yesterday_course' => $reporterYesterdayCourse,
            'reporter_yesterday_focus_label' => $reporterYesterdayFocusLabel,
            'reporter_yesterday_focus' => $reporterYesterdayFocus,
            'reporter_yesterday_focus_exacta_label' => $reporterYesterdayFocusExactaLabel,
            'reporter_yesterday_focus_exacta' => $reporterYesterdayFocusExacta,
            'reporter_yesterday_focus_trifecta_label' => $reporterYesterdayFocusTrifectaLabel,
            'reporter_yesterday_focus_trifecta' => $reporterYesterdayFocusTrifecta,
        ];
    }

    /**
     * @param  string|int                           $raceNumber
     * @param  \Carbon\CarbonInterface|string|null  $raceDate
     * @return array
     */
    private function scrapeToday(string|int $raceNumber, CarbonInterface|string|null $raceDate = null): array
    {
        return [];
    }
}
