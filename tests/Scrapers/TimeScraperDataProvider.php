<?php

declare(strict_types=1);

namespace BVP\BiwakoScraper\Tests\Scrapers;

/**
 * @author shimomo
 */
final class TimeScraperDataProvider
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
