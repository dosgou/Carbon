<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Localization;

class SqTest extends LocalizationTestCase
{
    const LOCALE = 'sq'; // Albanian

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Nesër në 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'E Shtunë në 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'E Diel në 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'E Hënë në 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'E Martë në 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'E Mërkurë në 00:00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'E Enjte në 00:00',
        // Carbon::parse('2018-01-06 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-06 00:00:00'))
        'E Premte në 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'E Martë në 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'E Mërkurë në 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'E Enjte në 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'E Premte në 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'E Shtunë në 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'E Diel e kaluar në 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Dje në 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Sot në 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Sot në 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Nesër në 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'E Martë në 00:00',
        // Carbon::parse('2018-01-08 00:00:00')->subDay()->calendar(Carbon::parse('2018-01-08 00:00:00'))
        'Dje në 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Dje në 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'E Martë e kaluar në 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'E Hënë e kaluar në 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'E Diel e kaluar në 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'E Shtunë e kaluar në 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'E Premte e kaluar në 00:00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'E Enjte e kaluar në 00:00',
        // Carbon::parse('2018-01-02 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-02 00:00:00'))
        'E Mërkurë e kaluar në 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'E Premte e kaluar në 00:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        '1. 1. 1. 1. 1.',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        '2. 1.',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        '3. 1.',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        '4. 1.',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        '5. 1.',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        '6. 1.',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        '7. 1.',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11. 2.',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40.',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41.',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        '100.',
        // Carbon::parse('2018-02-10 00:00:00', 'Europe/Paris')->isoFormat('h:mm a z')
        '12:00 pd cet',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 PD, 12:00 pd',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 PD, 1:30 pd',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 PD, 2:00 pd',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 PD, 6:00 pd',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 PD, 10:00 pd',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 MD, 12:00 md',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 MD, 5:00 md',
        // Carbon::parse('2018-02-10 21:30:00')->isoFormat('h:mm A, h:mm a')
        '9:30 MD, 9:30 md',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 MD, 11:00 md',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        '0.',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'disa sekonda më parë',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        '1 sekondë më parë',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 sekonda më parë',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        '2 sekonda më parë',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'një minutë më parë',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        '1 minutë më parë',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 minuta më parë',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        '2 minuta më parë',
        // Carbon::now()->subHours(1)->diffForHumans()
        'një orë më parë',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        '1 orë më parë',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 orë më parë',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        '2 orë më parë',
        // Carbon::now()->subDays(1)->diffForHumans()
        'një ditë më parë',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        '1 ditë më parë',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 ditë më parë',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        '2 ditë më parë',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        '1 javë më parë',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        '1 javë më parë',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 javë më parë',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        '2 javë më parë',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'një muaj më parë',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        '1 muaj më parë',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 muaj më parë',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        '2 muaj më parë',
        // Carbon::now()->subYears(1)->diffForHumans()
        'një vit më parë',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        '1 vit më parë',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 vite më parë',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        '2 vjet më parë',
        // Carbon::now()->addSecond()->diffForHumans()
        'në disa sekonda',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'në 1 sekondë',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'disa sekonda pas',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 sekondë pas',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'disa sekonda para',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 sekondë para',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'disa sekonda',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 sekondë',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 sekonda',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 sekonda',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'në 1 sekondë',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'një minutë disa sekonda',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 vjet 3 muaj 1 ditë 1 sekondë',
        // Carbon::now()->addYears(3)->diffForHumans(null, null, false, 4)
        'në 3 vite',
        // Carbon::now()->subMonths(5)->diffForHumans(null, null, true, 4)
        '5 muaj më parë',
        // Carbon::now()->subYears(2)->subMonths(3)->subDay()->subSecond()->diffForHumans(null, null, true, 4)
        '2 vjet 3 muaj 1 ditë 1 sekondë më parë',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 javë 10 orë',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 javë 6 ditë',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 javë 6 ditë',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 javë një orë',
        // CarbonInterval::days(2)->forHumans()
        '2 ditë',
        // CarbonInterval::create('P1DT3H')->forHumans(true)
        '1 ditë 3 orë',
    ];
}
