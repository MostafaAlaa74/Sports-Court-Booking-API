<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأكيد الحجز</title>
    <style>
        /* تنسيقات للموبايل */
        @media only screen and (max-width: 600px) {
            .container { width: 100% !important; padding: 20px !important; }
            .content-table { width: 100% !important; }
            .btn { display: block !important; width: 100% !important; text-align: center; }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f7f6; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f4f7f6; padding: 40px 0;">
    <tr>
        <td align="center">

            <table border="0" cellpadding="0" cellspacing="0" width="600" class="container" style="background-color: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">

                <tr>
                    <td align="center" style="background-color: #4CAF50; padding: 30px;">
                        <h1 style="color: #ffffff; margin: 0; font-size: 24px;">تم تأكيد الحجز ✅</h1>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 40px 30px; text-align: right; direction: rtl;">
                        <p style="color: #555555; font-size: 16px; margin-bottom: 20px;">
                            مرحباً <strong>{{ $data->user->name }}</strong>،
                        </p>
                        <p style="color: #777777; font-size: 14px; line-height: 1.6; margin-bottom: 30px;">
                            شكراً لك! لقد تم استلام الدفعة بنجاح وتأكيد حجزك. فيما يلي تفاصيل الحجز الخاصة بك، يرجى الاحتفاظ بها عند الوصول للملعب.
                        </p>

                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f9f9f9; border-radius: 8px; border: 1px solid #eeeeee;">
                            <tr>
                                <td style="padding: 15px; border-bottom: 1px dashed #dddddd; color: #888; font-size: 13px;">رقم الحجز</td>
                                <td style="padding: 15px; border-bottom: 1px dashed #dddddd; color: #333; font-weight: bold; text-align: left;">#{{ $data->id}}</td>
                            </tr>
                            <tr>
                                <td style="padding: 15px; border-bottom: 1px dashed #dddddd; color: #888; font-size: 13px;">الملعب</td>
                                <td style="padding: 15px; border-bottom: 1px dashed #dddddd; color: #333; font-weight: bold; text-align: left;">{{ $data->court->name }}</td>
                            </tr>
                            <tr>
                                <td style="padding: 15px; border-bottom: 1px dashed #dddddd; color: #888; font-size: 13px;">التاريخ والوقت</td>
                                <td style="padding: 15px; border-bottom: 1px dashed #dddddd; color: #333; font-weight: bold; text-align: left;">
                                    {{ \Carbon\Carbon::parse($data->date)->format('Y-m-d h:i A') }}
                                </td>
                            </tr>
{{--                            <tr>--}}
{{--                                <td style="padding: 15px; color: #4CAF50; font-weight: bold; font-size: 13px;">المبلغ المدفوع</td>--}}
{{--                                <td style="padding: 15px; color: #4CAF50; font-weight: bold; text-align: left;">--}}
{{--                                    {{ number_format($data['amount'], 2) }} EGP--}}
{{--                                </td>--}}
{{--                            </tr>--}}
                        </table>

                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-top: 30px;">
                            <tr>
                                <td align="center">
                                    <a href="{{ url('/') }}" class="btn" style="background-color: #333333; color: #ffffff; padding: 12px 30px; text-decoration: none; border-radius: 5px; font-weight: bold; display: inline-block;">عرض حجوزاتي</a>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>

                <tr>
                    <td align="center" style="background-color: #f4f4f4; padding: 20px; font-size: 12px; color: #999999;">
                        <p style="margin: 0;">&copy; {{ date('Y') }} اسم التطبيق. جميع الحقوق محفوظة.</p>
                        <p style="margin: 5px 0 0;">إذا كان لديك أي استفسار، يرجى الرد على هذا الإيميل.</p>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
