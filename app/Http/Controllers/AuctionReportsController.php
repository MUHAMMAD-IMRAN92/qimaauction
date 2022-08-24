<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\AuctionProduct;
use App\Models\AutoBid;
use App\Models\Product;
use App\Models\SingleBid;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuctionReportsController extends Controller {

    public function overViewReport($year) {
        $data = SingleBid::select('auction_product_id as id')->groupBy('auction_product_id')->get()->map(function($data) {
            $v = SingleBid::where('auction_product_id', $data->id)->orderBy('bid_amount', 'desc')->first();
            return $v;
        });
        // dd($data);
        $total = 0;
        foreach ($data as $amount) {
            // $bidamounttotal=$amount->bid_amount;
            if (isset($amount->auction_product_id)) {
                $auctionProduct = AuctionProduct::where('id', $amount->auction_product_id)->first()->weight;
                if (isset($auctionProduct)) {
                    $v = $amount->bid_amount * $auctionProduct;
                    $total += $v;
                }
            }
        }
        $auction = Auction::where('is_active','1')->first();
        $startTime = new Carbon($auction->startTime);
        $endTime = new Carbon($auction->endDate);
        $auctionTimeTotal = $startTime->diff($endTime)->format('%H:%I:%S');
        $totalWeight=AuctionProduct::where('auction_id',$auction->id)->sum('weight');
        if ($totalWeight > 0) {
            $avgPrice = number_format((float) $total / $totalWeight, 2, '.', '');
        } else {
            $avgPrice = 0;
        }
        $bidTime=SingleBid::where('auction_id',$auction->id)->orderby('created_at','asc')->first();
        $startTime = new Carbon($bidTime->created_at);
        $endTime = new Carbon($auction->startTime);
        $timerTotal = $startTime->diff($endTime)->format('%H:%I:%S');
        return view('admin.reports.overview', compact('auctionTimeTotal', 'year', 'avgPrice', 'total','timerTotal'));
    }

    public function auctionReportCSV($year) {
        $fileName = urlencode("Overview_Report.csv");
        $data = SingleBid::select('auction_product_id as id')->groupBy('auction_product_id')->get()->map(function($data) {
            $v = SingleBid::where('auction_product_id', $data->id)->orderBy('bid_amount', 'desc')->first();
            return $v;
        });
        $total = 0;
        foreach ($data as $amount) {
            if (isset($amount->auction_product_id)) {
                $auctionProduct = AuctionProduct::where('id', $amount->auction_product_id)->first()->weight;
                if (isset($auctionProduct)) {
                    $v = $amount->bid_amount * $auctionProduct;
                    $total += $v;
                }
            }
        }
        $auction = Auction::where('is_active','1')->first();
        $startTime = new Carbon($auction->startTime);
        $endTime = new Carbon($auction->endDate);
        $auctionTimeTotal = $startTime->diff($endTime)->format('%H:%I:%S');
        $totalWeight=AuctionProduct::where('auction_id',$auction->id)->sum('weight');
        if ($totalWeight > 0) {
            $avgPrice = number_format((float) $total / $totalWeight, 2, '.', '');
        } else {
            $avgPrice = 0;
        }
        $bidTime=SingleBid::where('auction_id',$auction->id)->orderby('created_at','asc')->first();
        $startTime = new Carbon($bidTime->created_at);
        $endTime = new Carbon($auction->startTime);
        $timerTotal = $startTime->diff($endTime)->format('%H:%I:%S');
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
        $columns = array('Year', 'Total Proceeds', 'Avg. Price per Pound', 'Auction Run Time - 3 min clock', 'Auction Run Time - total');
        $callback = function() use($total, $columns, $year, $auctionTimeTotal, $avgPrice,$timerTotal) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            // foreach ($data as $amount) {
            $row['Years'] = $year;
            $row['Total Proceeds'] = '$'.number_format($total);
            $row['Avg. Price per Pound'] = '$'.$avgPrice;
            $row['Auction Run Time - 3 min clock'] = $timerTotal;
            $row['Auction Run Time - total'] = $auctionTimeTotal;
            fputcsv($file, array($row['Years'], $row['Total Proceeds'], $row['Avg. Price per Pound'], $row['Auction Run Time - 3 min clock'], $row['Auction Run Time - total']));
            // }
            fclose($file);
        };
        return response()->streamDownload($callback, $fileName, $headers);
    }

    public function lotWinnersReport() {
        $auction = Auction::where('is_active','1')->first();
        $auctionProducts = AuctionProduct::where('auction_id',$auction->id)->with('products', 'singleBids', 'winningImages')->get();
        $results = $auctionProducts->map(function($e) {
            $e->highestbid = SingleBid::where('auction_product_id', $e->id)
                    ->orderBy('bid_amount', 'desc')
                    ->first();
            return $e;
        });
        return view('admin.reports.lot_winners', compact('auctionProducts'));
    }

    public function lotWinnersReportCSV() {
        $fileName = urlencode("Lot_Winners_Report.csv");
        $auction = Auction::where('is_active','1')->first();
        $auctionProducts = AuctionProduct::where('auction_id',$auction->id)->with('products')->get();
        $results = $auctionProducts->map(function($e) {
            $e->highestbid = SingleBid::where('auction_product_id', $e->id)
                    ->orderBy('bid_amount', 'desc')
                    ->first();
            return $e;
        });
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
        $columns = array('Rank', 'Score', 'Farmer', 'Weight (lbs)', 'High Bid', 'Total Value', 'Company');
        $callback = function() use($auctionProducts, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            foreach ($auctionProducts as $task) {
                $row['Rank'] = $task["rank"];
                $row['Score'] = $task["jury_score"];
                foreach ($task->products as $productData) {
                    $row['Farmer'] = $productData["product_title"];
                }
                $row['Weight (lbs)'] = $task["weight"];

                $row['High Bid'] = isset($task->highestbid) ? '$'.number_format($task->highestbid->bid_amount) : '$'.number_format($task->start_price);
                $row['Total Value'] = isset($task->highestbid) ? '$'.number_format($task->highestbid->bid_amount * $task->weight) : '$'.number_format($task->start_price * $task->weight);
                foreach ($task->highestbid->user as $userData) {
                    $row['Company'] = $userData["company" ?? '---'];
                }
                fputcsv($file, array($row['Rank'], $row['Score'], $row['Farmer'], $row['Weight (lbs)'], $row['High Bid'], $row['Total Value'], $row['Company']));
            }
            fclose($file);
        };
        return response()->streamDownload($callback, $fileName, $headers);
    }

    public function bidderSummaryReport() {
        $userMaxBids = User::whereHas('bid')->with('products')->orderBy('id')->get();
        return view('admin.reports.bidder_summary', compact('userMaxBids'));
    }

    public function bidderSummaryReportCSV() {
        $fileName = urlencode("Bidder_Summary_Report.csv");
        $userMaxBids = User::whereHas('bid')->with('products')->orderBy('id')->get();
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
        $columns = array('Bidding Company', 'Former Name','Bid Amount');
        $callback = function() use($userMaxBids, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            foreach ($userMaxBids as $task) {
                foreach ($task->products->groupBy('id') as $product){
                    $row['Company'] = $task["company" ?? '---'];
                    $row['Former Name'] = $product[0]['product_title'];
                    $row['Bid Amount'] = '$'.$product[0]['bid_amount'];

                fputcsv($file, array($row['Company'],$row['Former Name'],$row['Bid Amount']));
                }
            }
            fclose($file);
        };
        return response()->streamDownload($callback, $fileName, $headers);
    }

    public function fullBidReport() {
        $singlebids = SingleBid::orderBy('auction_product_id', 'asc')->get();
        $results = $singlebids->map(function($e) {
            $e->products = Product::where('id', $e->auction_product_id)
                    ->first();
            return $e;
        });
        return view('admin.reports.full_bid', compact('singlebids'));
    }

    public function fullBidReportCSV() {
        $fileName = urlencode("Full_Bid_Report.csv");
        $singlebids = SingleBid::orderBy('auction_product_id', 'asc')->get();
        $results = $singlebids->map(function($e) {
            $e->products = Product::where('id', $e->auction_product_id)
                    ->first();
            return $e;
        });
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
        $columns = array('Bid Amount', 'Bidder Company Name', 'Lot');
        $callback = function() use($singlebids, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            foreach ($singlebids as $task) {
                $row['Bid Amount'] = '$'.$task["bid_amount"];
                foreach ($task->user as $userData) {
                    $row['Bidder Company Name'] = $userData["company" ?? '---'];
                }
                $row['Lot'] = $task->products['product_title'];
                fputcsv($file, array($row['Bid Amount'], $row['Bidder Company Name'], $row['Lot']));
            }
            fclose($file);
        };
        return response()->streamDownload($callback, $fileName, $headers);
    }

}
