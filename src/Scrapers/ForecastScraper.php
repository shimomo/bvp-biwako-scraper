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
     * @param  string|int                           $raceCode
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return array
     */
    public function scrape(string|int $raceCode, CarbonInterface|string|null $date = null): array
    {
        return array_merge(...[
            $this->scrapeYesterday($raceCode, $date),
            $this->scrapeToday($raceCode, $date),
        ]);
    }

    /**
     * @param  string|int                           $raceCode
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return array
     *
     * @throws \RuntimeException
     */
    private function scrapeYesterday(string|int $raceCode, CarbonInterface|string|null $date = null): array
    {
        $date = Carbon::parse($date ?? 'today')->format('Ymd');
        $crawlerUrl = sprintf($this->baseUrl, 'syussou', $date, $raceCode, '');
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

        $reporterYesterdayCourseLabel = '記者予想 前日コース';
        $reporterYesterdayFocusExactaLabel = '記者予想 前日フォーカス 2連単';
        $reporterYesterdayFocusTrifectaLabel = '記者予想 前日フォーカス 3連単';
        $reporterYesterdayCommentLabel = '記者予想 前日コメント';
        $reporterYesterdayFocusLabel = '記者予想 前日フォーカス';

        $reporterYesterdayCourse = Normalizer::normalize(implode($forecasts['.sinnyu-div > ul > li.num']));
        $reporterYesterdayFocusExacta = [];
        $reporterYesterdayFocusTrifecta = Normalizer::normalize($forecasts['.focus > li']);
        $reporterYesterdayComment = Normalizer::normalize($forecasts['.comment-div'][0]);
        $reporterYesterdayFocus = array_merge($reporterYesterdayFocusExacta, $reporterYesterdayFocusTrifecta);

        return [
            'reporter_yesterday_course_label' => $reporterYesterdayCourseLabel,
            'reporter_yesterday_course' => $reporterYesterdayCourse,
            'reporter_yesterday_focus_label' => $reporterYesterdayFocusLabel,
            'reporter_yesterday_focus' => $reporterYesterdayFocus,
            'reporter_yesterday_focus_exacta_label' => $reporterYesterdayFocusExactaLabel,
            'reporter_yesterday_focus_exacta' => $reporterYesterdayFocusExacta,
            'reporter_yesterday_focus_trifecta_label' => $reporterYesterdayFocusTrifectaLabel,
            'reporter_yesterday_focus_trifecta' => $reporterYesterdayFocusTrifecta,
            'reporter_yesterday_comment_label' => $reporterYesterdayCommentLabel,
            'reporter_yesterday_comment' => $reporterYesterdayComment,
        ];
    }

    /**
     * @param  string|int                           $raceCode
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return array
     */
    private function scrapeToday(string|int $raceCode, CarbonInterface|string|null $date = null): array
    {
        return [];
    }
}
