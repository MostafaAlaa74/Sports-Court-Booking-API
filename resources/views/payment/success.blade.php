<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تم الدفع بنجاح</title>
    <style>
        /* تنسيقات عامة */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* كارت النجاح */
        .success-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            text-align: center;
            max-width: 400px;
            width: 90%;
            position: relative;
            overflow: hidden;
        }

        /* العلامة الخضراء المتحركة */
        .checkmark-circle {
            width: 80px;
            height: 80px;
            background-color: #4CAF50;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 0 0 10px rgba(76, 175, 80, 0.1);
            animation: pop 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .checkmark {
            color: white;
            font-size: 40px;
            font-weight: bold;
        }

        /* النصوص */
        h1 {
            color: #333;
            margin-bottom: 10px;
            font-size: 24px;
        }

        p.subtitle {
            color: #777;
            margin-bottom: 30px;
        }

        /* تفاصيل الفاتورة */
        .details-box {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 25px;
            text-align: right;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px dashed #e0e0e0;
        }

        .detail-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .label {
            color: #888;
            font-size: 14px;
        }

        .value {
            color: #333;
            font-weight: 600;
            font-size: 14px;
        }

        /* زر العودة */
        .btn-home {
            background-color: #333;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            transition: background 0.3s;
        }

        .btn-home:hover {
            background-color: #000;
        }

        /* أنيميشن */
        @keyframes pop {
            0% { transform: scale(0); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body>

<div class="success-card">
    <div class="checkmark-circle">
        <span class="checkmark">✔</span>
    </div>

    <h1>تم الدفع بنجاح!</h1>
    <p class="subtitle">شكراً لك، تم تأكيد حجز الملعب.</p>

    <div class="details-box">
        <div class="detail-row">
            <span class="label">رقم الحجز</span>
            <span class="value">#{{ $booking->id  }}</span>
        </div>

        <div class="detail-row">
            <span class="label">الملعب</span>
            <span class="value">{{ $booking->court->name }}</span>
        </div>

        <div class="detail-row">
            <span class="label">التاريخ</span>
            <span class="value">{{ \Carbon\Carbon::parse($booking->date)->format('Y-m-d h:i A') }}</span>
        </div>

{{--        <div class="detail-row">--}}
{{--            <span class="label">العملية (Transaction)</span>--}}
{{--            <span class="value">{{ substr($data['transaction_id'], -8) }}...</span>--}}
{{--        </div>--}}

{{--        <div class="detail-row" style="border-top: 2px solid #eee; margin-top: 10px; padding-top: 10px;">--}}
{{--            <span class="label" style="color: #4CAF50; font-weight: bold;">المبلغ المدفوع</span>--}}
{{--            <span class="value" style="color: #4CAF50; font-weight: bold;">--}}
{{--                    {{ number_format($data['amount'], 2) }} EGP--}}
{{--                </span>--}}
{{--        </div>--}}
    </div>

    <a href="/" class="btn-home">العودة للرئيسية</a>
</div>

</body>
</html>
