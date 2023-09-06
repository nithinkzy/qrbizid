<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public static function generateAndStore($bizCardId)

    {
        $hashedBizCardId = Hash::make($bizCardId);
        $bizCardId = "https://qrbizid/" . $hashedBizCardId;
        $filename = uniqid('qrcode_') . '.svg';
        $qrFolder = 'qr_codes/';
        $storagePath = 'app/public/' . $qrFolder . $filename;
        $filePath = $qrFolder  . $filename;
        QrCode::size(200)
            ->style('dot')
            ->eye('circle')
            ->color(0, 0, 0)
            ->margin(1)
            ->generate($bizCardId, storage_path(str_replace('/', DIRECTORY_SEPARATOR, $storagePath)));

        return $filePath;
    }
}
