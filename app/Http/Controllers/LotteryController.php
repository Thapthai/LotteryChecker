<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotteryController extends Controller
{
    private $prizeTable;

    public function __construct()
    {

        $this->prizeTable = session('prizeTable', [
            'prize1' => null,
            'prize2' => [],
            'adjacentPrize' => [],
            'lastTwoDigitsPrize' => null,
        ]);
    }
    public function index()
    {
        $prizeTable = session('prizeTable', [
            'prize1' => null,
            'prize2' => [],
            'adjacentPrize' => [],
            'lastTwoDigitsPrize' => null,
        ]);

        return view('lottery.index', compact('prizeTable'));
    }

    public function generatePrizes()
    {
        $prize1 = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
        $prize2 = array_map(fn() => str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT), range(1, 3));
        $adjacentPrize = [
            str_pad(($prize1 - 1 + 1000) % 1000, 3, '0', STR_PAD_LEFT),
            str_pad(($prize1 + 1) % 1000, 3, '0', STR_PAD_LEFT),
        ];
        $lastTwoDigitsPrize = str_pad(rand(0, 99), 2, '0', STR_PAD_LEFT);


        $this->prizeTable = [
            'prize1' => $prize1,
            'prize2' => $prize2,
            'adjacentPrize' => $adjacentPrize,
            'lastTwoDigitsPrize' => $lastTwoDigitsPrize,
        ];

        session(['prizeTable' => $this->prizeTable]);

        return redirect()->route('lottery.index');
    }

    public function checkPrize(Request $request)
    {
        $prizeTable = session('prizeTable', [
            'prize1' => null,
            'prize2' => [],
            'adjacentPrize' => [],
            'lastTwoDigitsPrize' => null,
        ]);

        $ticketNumber = str_pad($request->input('ticketNumber'), 3, '0', STR_PAD_LEFT);
        session(['ticketNumber' => $ticketNumber]);

        $prizes = [];
        $details = [];

        if ($ticketNumber === $prizeTable['prize1']) {
            $prizes[] = 'ถูกรางวัลที่ 1';
            $details['prize1'] = $prizeTable['prize1']; // กำหนดค่าให้เป็น array
        }
        if (in_array($ticketNumber, $prizeTable['prize2'])) {
            $prizes[] = 'ถูกรางวัลที่ 2';
            $details['prize2'] = $prizeTable['prize2']; // ใช้ implode เพื่อให้เป็น array
        }
        if (in_array($ticketNumber, $prizeTable['adjacentPrize'])) {
            $prizes[] = 'ถูกรางวัลเลขข้างเคียง';
            $details['adjacentPrize'] = $prizeTable['adjacentPrize']; // ใช้ implode เพื่อให้เป็น array
        }
        if (substr($ticketNumber, -2) === $prizeTable['lastTwoDigitsPrize']) {
            $prizes[] = 'ถูกรางวัลเลขท้าย 2 ตัว';
            $details['lastTwoDigitsPrize'] = $prizeTable['lastTwoDigitsPrize']; // กำหนดค่าให้เป็น array
        }

        // Use implode to ensure the result is a properly formatted string
        $result = !empty($prizes) ? implode(' และ ', $prizes) : 'เสียใจด้วย คุณไม่ถูกรางวัล';

        return back()->with(compact('result', 'details', 'ticketNumber'));
    }
}
