<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فشل عملية الدفع</title>
    <style>
        /* نفس التنسيقات العامة لضمان التناسق */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .failed-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            text-align: center;
            max-width: 400px;
            width: 90%;
            position: relative;
            overflow: hidden;
            border-top: 5px solid #F44336; /* خط أحمر من فوق */
        }

        /* الدائرة الحمراء وعلامة الخطأ */
        .cross-circle {
            width: 80px;
            height: 80px;
            background-color: #ffebee; /* أحمر فاتح جداً للخلفية */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 0 0 10px rgba(244, 67, 54, 0.05);
            animation: shake 0.5s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
        }

        .cross {
            color: #F44336; /* لون الخطأ */
            font-size: 40px;
            font-weight: bold;
            line-height: 1;
        }

        h1 {
            color: #333;
            margin-bottom: 10px;
            font-size: 24px;
        }

        p.subtitle {
            color: #777;
            margin-bottom: 30px;
        }

        /* صندوق التفاصيل (نفس الستايل بس لون الحدود أحمر خفيف) */
        .details-box {
            background-color: #fff5f5; /* خلفية محمرة شوية */
            border: 1px dashed #ffcdd2;
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
            border-bottom: 1px dashed #ffcdd2; /* فواصل حمراء */
        }

        .detail-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .label { color: #888; font-size: 14px; }
        .value { color: #333; font-weight: 600; font-size: 14px; }

        /* رسالة الخطأ المحددة */
        .error-text {
            color: #d32f2f;
            font-size: 13px;
            font-weight: bold;
            display: block;
            margin-top: 5px;
        }

        /* الأزرار */
        .actions {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .btn {
            padding: 12px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            transition: all 0.3s;
            flex: 1;
        }

        .btn-retry {
            background-color: #F44336;
            color: white;
            box-shadow: 0 4px 15px rgba(244, 67, 54, 0.2);
        }
        .btn-retry:hover { background-color: #d32f2f; transform: translateY(-2px); }

        .btn-home {
            background-color: #f5f5f5;
            color: #555;
        }
        .btn-home:hover { background-color: #e0e0e0; }

        /* أنيميشن الاهتزاز للخطأ */
        @keyframes shake {
            10%, 90% { transform: translate3d(-1px, 0, 0); }
            20%, 80% { transform: translate3d(2px, 0, 0); }
            30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
            40%, 60% { transform: translate3d(4px, 0, 0); }
        }
    </style>
</head>
<body>

<div class="failed-card">
    <div class="cross-circle">
        <span class="cross">✕</span>
    </div>

    <h1>فشلت العملية</h1>
    <p class="subtitle">عذراً، لم نتمكن من إتمام عملية الدفع.</p>

    <div class="details-box">
        <div class="detail-row">
            <span class="label">رقم الحجز</span>
            <span class="value">#{{ $data->booking->id ?? 'N/A' }}</span>
        </div>

        <div class="detail-row" style="flex-direction: column; align-items: flex-start;">
            <span class="label">سبب الرفض:</span>
            <span class="value error-text">
                    {{ $error ?? 'حدث خطأ غير متوقع أثناء الاتصال بالبنك.' }}
                </span>
        </div>
    </div>

    <div class="actions">
        @if(isset($data['retry_url']))
            <a href="{{ $data['retry_url'] }}" class="btn btn-retry">حاول مرة أخرى ↺</a>
        @else
            <a href="javascript:history.back()" class="btn btn-retry">حاول مرة أخرى ↺</a>
        @endif

        <a href="/" class="btn btn-home">الرئيسية</a>
    </div>
</div>

</body>
</html>
