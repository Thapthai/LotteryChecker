<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบสุ่มรางวัลล็อตเตอรี่</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        body {
            font-family: "Prompt"
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="card">


            <div class="card-header rounded-0" style="background-color: #0a3849">
                <h3 class="text-center" style="color: #28c5ff"><strong> รางวัลล็อตเอรรี่ Diversition</strong></h3>
            </div>
            <div class="card-body" style="background-color: #eaf4f8">
                <h4 class="mt-3"> ผลการออกรางวัลล็อตเอรรี่ Diversition</h4>
                <div class="my-2">
                    <a href="{{ route('lottery.generate') }}"
                        class="btn btn-outline-dark rounded-pill">ดำเนินการสุ่มรางวัล</a>
                </div>

                <table class="table table-bordered text-center w-75" style="font-size: 24px">

                    <tr>
                        <th colspan="2" style="background-color: #0a3849;color:#ffffff">รางวัลที่ 1</th>
                        <th colspan="2">{{ $prizeTable['prize1'] ?? '-' }}</th>
                    </tr>
                    <tr>
                        <th colspan="2" style="background-color: #0a3849;color:#ffffff">เลขข้างเคียงรางวัลที่ 1</th>

                        @foreach ($prizeTable['adjacentPrize'] as $adjacentPrize)
                            <th>{{ $adjacentPrize ?: '-' }}</th>
                        @endforeach

                    </tr>
                    <tr>
                        <th style="background-color: #0a3849;color:#ffffff">รางวัลที่ 2</th>
                        @foreach ($prizeTable['prize2'] as $prize2)
                            <th>{{ $prize2 ?: '-' }}</th>
                        @endforeach

                    </tr>

                    <tr>
                        <th colspan="2" style="background-color: #0a3849;color:#ffffff">เลขท้าย 2 ตัว</th>
                        <th colspan="2">{{ $prizeTable['lastTwoDigitsPrize'] ?? '-' }}</th>
                    </tr>

                </table>

                <div class="card rounded-0 border-dark border-2">
                    <div class="card-header rounded-0" style="background-color: #28c5ff;">
                        <h5 class="mt-2" style="color: #ffffff;"><strong>ตรวจรางวัลล็อตเตอรี่ Diversition</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('lottery.check') }}" method="POST" class="my-4 form-inline">
                            @csrf

                            <div class="row">
                                <div class="col-2 mt-2">
                                    <h4> <strong>เลขวัลล็อตเอรรี่ :</strong></h4>
                                </div>
                                <div class="col-4">
                                    <input type="text" name="ticketNumber" id="ticketNumber" class="form-control border-dark border-2" value="@if (session('ticketNumber'))  {{ session('ticketNumber') }} @endif" placeholder="กรอกตัวเลข 3 หลัก" required>

                                    @if ($errors->has('ticketNumber'))
                                        <div class="text-danger">
                                            {{ $errors->first('ticketNumber') }}
                                        </div>
                                    @endif

                                </div>
                            </div>
                      
                            @if (session('result'))
                                <div class="alert rounded-0 mt-2" style="background-color: #ffc32b;color:black">
                                    <h5 class="mt-2">
                                        {{ session('ticketNumber') }} {{ session('result') }}
                                    </h5>
                                </div>
                            @endif

                            <button type="submit" class="btn btn-outline-dark rounded-pill mt-2 w-25"
                                style="background-color:#28c5ff "><strong>ตรวจรางวัล</strong></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
