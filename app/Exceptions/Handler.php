<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * قائمة الاستثناءات التي لا يتم تسجيلها
     */
    protected $dontReport = [];

    /**
     * قائمة المدخلات التي لا يتم عرضها عند حدوث Validation
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * معالجة الأخطاء الخاصة بـ API (JSON)
     */
    public function render($request, Throwable $exception)
    {
        // 🔴 Validation Error
        if ($exception instanceof ValidationException) {
            return response()->json([
                'success' => false,
                'message' => 'البيانات المدخلة غير صحيحة',
                'errors' => $exception->errors(),
            ], 422);
        }

        // 🔴 404 Not Found
        if ($exception instanceof NotFoundHttpException) {
            return response()->json([
                'success' => false,
                'message' => 'المسار غير موجود',
            ], 404);
        }

        // 🔴 Method Not Allowed
        if ($exception instanceof MethodNotAllowedHttpException) {
            return response()->json([
                'success' => false,
                'message' => 'طريقة الطلب غير مسموح بها',
            ], 405);
        }

        // 🔴 أي خطأ آخر (500)
        if ($request->expectsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'حدث خطأ في الخادم، حاول لاحقًا',
            ], 500);
        }

        return parent::render($request, $exception);
    }
}
