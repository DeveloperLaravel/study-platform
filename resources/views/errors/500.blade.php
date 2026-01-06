<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة صيانة</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-green-200 via-blue-200 to-purple-200 flex items-center justify-center min-h-screen font-sans">

    <div class="bg-white/90 backdrop-blur-md rounded-3xl shadow-xl p-10 text-center max-w-xl mx-4 animate-fadeIn">
        <!-- أيقونة أو صورة -->
        <div class="mb-6">
            <img src="https://img.icons8.com/clouds/100/000000/maintenance.png" alt="صيانة" class="mx-auto">
        </div>

        <!-- عنوان رئيسي -->
        <h1 class="text-4xl font-extrabold text-gray-800 mb-4">الموقع قيد الصيانة</h1>

        <!-- وصف قصير -->
        <p class="text-gray-600 mb-6">
        حدث خطأ في الخادم⏳
        </p>

        <!-- عداد أو رابط -->
        <a href="/" class="inline-block bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-lg transition-colors">
            العودة للصفحة الرئيسية
        </a>
    </div>

    <style>
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 1s ease-in-out forwards;
        }
    </style>

</body>
</html>
