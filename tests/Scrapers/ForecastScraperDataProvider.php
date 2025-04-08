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
                'arguments' => [1, '2025-03-16'],
                'expected' => [
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => '地元優出はならなかった吉川だが仕上がりには自信の表情。ここは絶好枠を味方に白星奪取あるのみだ。良機を駆る加木が俊敏に差して浮上。雑賀、石川も次位争いへ',
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '123/465',
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['1=2-3', '1=2-4', '1-3-2', '1-4-2', '1-3-4'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => [],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['1=2-3', '1=2-4', '1-3-2', '1-4-2', '1-3-4'],
                ],
            ],
            [
                'arguments' => [2, '2025-03-16'],
                'expected' => [
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => '新出の仕上がりは上々のムード。ライバル勢の攻めを制して押し切るのみだ。ただ好出足を誇る川上が差し逆転の場面は十分。小林センター自在に。井内展開探して',
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '123/456',
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['1=2-3', '1=2-5', '1-3-2', '1-5-2', '1-3-5'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => [],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['1=2-3', '1=2-5', '1-3-2', '1-5-2', '1-3-5'],
                ],
            ],
        ];
    }
}
