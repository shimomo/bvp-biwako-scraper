<?php

declare(strict_types=1);

namespace BVP\BiwakoScraper\Tests\Scrapers;

/**
 * @author shimomo
 */
final class ForecastScraperDataProvider
{
    /**
     * @return array
     */
    public static function scrapeProvider(): array
    {
        return [
            [
                'arguments' => [1, '2024-01-03'],
                'expected' => [
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '123/456',
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['1=4-5', '1=4-6', '1-5-4', '1-6-4', '1-5-6'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => [],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['1=4-5', '1=4-6', '1-5-4', '1-6-4', '1-5-6'],
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => 'オープニングカードは山田が絶好枠。気合のインS攻勢で白星ゲットあるのみだ。ただ好調機を駆って前検好況な和田の一撃は逆転まで。川島、吉田が展開突いて',
                ],
            ],
            [
                'arguments' => [2, '2024-01-03'],
                'expected' => [
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '123/456',
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['3=4-1', '3=4-5', '3-1-4', '3-5-4', '3-1-5'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => [],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['3=4-1', '3=4-5', '3-1-4', '3-5-4', '3-1-5'],
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => '前検気配は上々だった鶴本のセンター自在攻勢を本命視。吉川喜はその動きを見て逆転狙って。松浦は好枠を生かしたいところ。渡邉が巧腕さばき駆使して浮上へ',
                ],
            ],
        ];
    }
}
