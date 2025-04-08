<?php

declare(strict_types=1);

namespace BVP\BiwakoScraper\Tests;

/**
 * @author shimomo
 */
final class ScraperCoreDataProvider
{
    /**
     * @return array
     */
    public static function scrapeForecastsProvider(): array
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

    /**
     * @return array
     */
    public static function scrapeTimesProvider(): array
    {
        return [
            [
                'arguments' => [1, '2025-03-16'],
                'expected' => [
                    'boat_number_1_racer_name' => '吉川晴人',
                    'boat_number_1_racer_exhibition_time' => 6.88,
                    'boat_number_1_racer_lap_time' => 37.08,
                    'boat_number_1_racer_turn_time' => 5.58,
                    'boat_number_1_racer_straight_time' => 7.89,
                    'boat_number_2_racer_name' => '加木郁',
                    'boat_number_2_racer_exhibition_time' => 6.74,
                    'boat_number_2_racer_lap_time' => 36.67,
                    'boat_number_2_racer_turn_time' => 6.31,
                    'boat_number_2_racer_straight_time' => 7.88,
                    'boat_number_3_racer_name' => '雑賀勇貴',
                    'boat_number_3_racer_exhibition_time' => 6.85,
                    'boat_number_3_racer_lap_time' => 37.58,
                    'boat_number_3_racer_turn_time' => 6.26,
                    'boat_number_3_racer_straight_time' => 7.93,
                    'boat_number_4_racer_name' => '石川哲秀',
                    'boat_number_4_racer_exhibition_time' => 6.84,
                    'boat_number_4_racer_lap_time' => 37.89,
                    'boat_number_4_racer_turn_time' => 6.01,
                    'boat_number_4_racer_straight_time' => 8.07,
                    'boat_number_5_racer_name' => '草川壮良',
                    'boat_number_5_racer_exhibition_time' => 6.97,
                    'boat_number_5_racer_lap_time' => 37.64,
                    'boat_number_5_racer_turn_time' => 6.27,
                    'boat_number_5_racer_straight_time' => 8.03,
                    'boat_number_6_racer_name' => '川崎公靖',
                    'boat_number_6_racer_exhibition_time' => 6.91,
                    'boat_number_6_racer_lap_time' => 37.52,
                    'boat_number_6_racer_turn_time' => 6.00,
                    'boat_number_6_racer_straight_time' => 7.90,
                ],
            ],
            [
                'arguments' => [2, '2025-03-16'],
                'expected' => [
                    'boat_number_1_racer_name' => '新出浩司',
                    'boat_number_1_racer_exhibition_time' => 6.82,
                    'boat_number_1_racer_lap_time' => 37.69,
                    'boat_number_1_racer_turn_time' => 5.83,
                    'boat_number_1_racer_straight_time' => 8.00,
                    'boat_number_2_racer_name' => '川上剛',
                    'boat_number_2_racer_exhibition_time' => 6.76,
                    'boat_number_2_racer_lap_time' => 37.60,
                    'boat_number_2_racer_turn_time' => 5.86,
                    'boat_number_2_racer_straight_time' => 7.97,
                    'boat_number_3_racer_name' => '小林文彦',
                    'boat_number_3_racer_exhibition_time' => 6.72,
                    'boat_number_3_racer_lap_time' => 38.04,
                    'boat_number_3_racer_turn_time' => 5.84,
                    'boat_number_3_racer_straight_time' => 8.03,
                    'boat_number_4_racer_name' => '廣瀬凜',
                    'boat_number_4_racer_exhibition_time' => 6.86,
                    'boat_number_4_racer_lap_time' => 38.17,
                    'boat_number_4_racer_turn_time' => 6.10,
                    'boat_number_4_racer_straight_time' => 7.97,
                    'boat_number_5_racer_name' => '井内将太郎',
                    'boat_number_5_racer_exhibition_time' => 6.85,
                    'boat_number_5_racer_lap_time' => 37.69,
                    'boat_number_5_racer_turn_time' => 6.03,
                    'boat_number_5_racer_straight_time' => 8.00,
                    'boat_number_6_racer_name' => '高山秀雄',
                    'boat_number_6_racer_exhibition_time' => 6.84,
                    'boat_number_6_racer_lap_time' => 38.31,
                    'boat_number_6_racer_turn_time' => 6.00,
                    'boat_number_6_racer_straight_time' => 7.86,
                ],
            ],
        ];
    }
}
