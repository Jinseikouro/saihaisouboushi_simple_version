<?php

namespace App\Http\Controllers\Driver\ShipmentsConfirmation;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use Illuminate\View\View;
use Illuminate\Support\carbon;
use Illuminate\Http\Request;


class UserStatusConfirmController extends Controller
{
    public function showlist(): View
    {
        // ログイン中のユーザーのidを取得
        $driverId = auth()->user()->id;

        // 当日の日付を取得
        $today = Carbon::now()->toDateString();

        // shipmentsテーブルからログイン中のドライバーに関連する当日のデータを取得
        $shipments = Shipment::where('driver_id', $driverId)
            ->whereDate('delivery_start_time', $today) // 当日のデータに絞り込む
            ->orderBy('id')
            ->paginate(5);

            $filteredShipments = $shipments
                ->sortBy('groupe.post_code')
                ->sortBy('delivery_start_time')
                ->sortByDesc('groupe.absence')
                ->sortByDesc('delivery_status');

        return view('driver.shipments-confirmation.user-satatus-confirm', ['shipments' => $filteredShipments]);
    }
    public function toggleShipmentStatus(Request $request)
    {
        $shipment_id = $request->input('shipment_id');

        // Shipmentモデルを取得
        $shipment = Shipment::findOrFail($shipment_id);

        $shipment->update([
            'delivery_status' => $shipment->delivery_status ? 0 : 1,
        ]);

        // データの再読み込みと表示
        return redirect()->route('driver.customer.status');
    }




}
