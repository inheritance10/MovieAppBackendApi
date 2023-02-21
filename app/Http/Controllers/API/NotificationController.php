<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Notification;

class NotificationController extends BaseController
{
    public function index()
    {
        $notification = Notification::all();
        return $this->success('Notification listelendi', $notification);
    }
}
