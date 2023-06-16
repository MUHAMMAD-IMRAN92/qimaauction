<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\Jury;
use App\Models\Review;
use App\Models\SentToJury;
use App\Models\Tag;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ReviewController extends Controller
{
    public function agreement(Request $request, $slug = null)
    {

        if ($request->submit) {
            Storage::disk('public')->put($request->slug, $request->detail);
            Agreement::where('id', $request->id)->update(
                [
                    'title' => $request->title,
                    //    'slug' => $request->slug,
                ]
            );
        }

        if (isset($slug)) {
            $agreement = Agreement::where('slug', $slug)->first();
            return view('admin.agreementDetail', compact('agreement'));
        } else {
            $agreement = Agreement::all();
            return view('admin.agreement', compact('agreement'))->with('success', 'Updated Successfully');
        }
    }
    public function saveReview(Request $request)
    {
        //  if(isset($request->table_submit))
        //  {
        //     //  dd($request->all());
        //             $alltablesamples = SentToJury::join('products','products.id','sample_sent_to_jury.product_id')
        //             ->join('juries','juries.id','sample_sent_to_jury.jury_id')
        //             ->select('products.id as productId','products.product_title as productTitle',
        //             'sample_sent_to_jury.id as sampleId','sample_sent_to_jury.jury_id as juryId',
        //             'sample_sent_to_jury.samples as samples','sample_sent_to_jury.tables as sampleTable',
        //             'juries.name as juryName','sample_sent_to_jury.is_hidden')
        //             ->where('sample_sent_to_jury.jury_id', $request->jury_id)
        //             ->where('sample_sent_to_jury.tables', $request->table_submit)
        //             ->where('sample_sent_to_jury.is_hidden', '0')
        //             ->get();
        //             // dd($alltablesamples);
        //             foreach ($alltablesamples as $key => $value) {
        //                     $sampleSent = SentToJury::where('jury_id',  $value->juryId)
        //                     ->where('product_id', $value->productId)
        //                     ->where('samples', $value->samples)
        //                     ->where('is_hidden','0')
        //                     ->first();
        //                     $sampleSent->is_hidden = '1';
        //                     $sampleSent->save();
        //                     if(isset($request->review_id))
        //                     {
        //                         $review = Review::where('id',$request->review_id)->first();
        //                     }
        //                     else
        //                     {
        //                         $review = new Review();
        //                     }
        //                     $review->aroma_dry              = $request->aroma_dry;
        //                     $review->aroma_crust            = $request->aroma_crust;
        //                     $review->roast                  = $request->roast;
        //                     $review->first_number            = $request->first_number;
        //                     $review->second_number          = $request->second_number;
        //                     $review->aroma_break            = $request->aroma_break;
        //                     $review->aroma_note             = $request->aroma_note;
        //                     $review->color_dev              = $request->color_dev;
        //                     $review->defect                 = (isset($request->defect)) ? $request->defect : 0;
        //                     $review->clean_up               = $request->clean_up;
        //                     $review->sweetness              = $request->sweetness;
        //                     $review->defects_note           = $request->defect_note;
        //                     $review->clean_sweet_note       = $request->cleanup_note;
        //                     $review->acidity                = $request->acidity;
        //                     $review->acidity_chk            = $request->acidity_chk;
        //                     $review->mouth_feel             = $request->mouth_feel;
        //                     $review->fm_chk                 = $request->fm_chk;
        //                     $review->flavour                = $request->flavour;
        //                     $review->flavor_note            = $request->flavor_note;
        //                     $review->after_taste            = $request->after_taste;
        //                     $review->balance                = $request->balance;
        //                     $review->sweetness_note          = $request->sweetness_note;
        //                     $review->acidity_note            = $request->acidity_note;
        //                     $review->mouthfeel_note          = $request->mouthfeel_note;
        //                     $review->aftertaste_note         = $request->aftertaste_note;
        //                     $review->balance_note            = $request->balance_note;
        //                     $review->overall_note            = $request->overall_note;
        //                     $review->overall                = $request->overall;
        //                     $review->total_score            = (isset($request->total_score)) ? $request->total_score : 0;
        //                     $review->jury_id                = $request->jury_id;
        //                     $review->sample_id              = $request->sent_sample_id;
        //                     $review->product_id             = $request->product_id;
        //                     $review->save();
        //                     if(isset($request->discriptor))
        //                     {
        //                             foreach ($request->discriptor as $tag) {
        //                                 $data = Tag::where('tag',$tag)->first();
        //                                 if(!isset($data))
        //                                 {
        //                                     $descriptor = new Tag();
        //                                     $descriptor->tag = $tag;
        //                                     $descriptor->review_id = $review->id;
        //                                     $descriptor->jury_id = $review->jury_id;
        //                                     $descriptor->save();
        //                                 }
        //                             }
        //                     }
        //             }
        //    return redirect()->route('juryLinks',['id'=>encrypt($request->jury_id)]);
        //  }
        //  if(isset($request->sample_submit))
        {
            $sampleSent = SentToJury::where('jury_id',  $request->jury_id)
                ->where('product_id', $request->product_id)
                //  ->where('temporary_link',$request->link)
                ->where('id', $request->sent_sample_id)
                //  ->where('is_hidden','0')
                ->first();
            //  return  $sampleSent;
            // dd(  $sampleSent);
            if ($sampleSent->is_hidden == '1') {
                $review = Review::where('sample_id', $sampleSent->id)->first();
                //return view('admin.jury.alredy_submit');
                if (!$review) {
                    $review = new Review();
                }
            } else {
                if (isset($request->review_id)) {
                    $review = Review::where('id', $request->review_id)->first();
                    if (!$review) {
                        $review = new Review();
                    }
                } else {
                    $review = new Review();
                }

                $sampleSent->is_hidden = '1';
                $sampleSent->save();
            }
            $review->aroma_dry              = $request->aroma_dry;
            $review->aroma_crust            = $request->aroma_crust;
            $review->roast                  = $request->roast;
            $review->roast_note             = $request->roast_note;
            $review->first_number            = $request->first_number;
            $review->second_number          = $request->second_number;
            $review->aroma_break            = $request->aroma_break;
            $review->aroma_note             = $request->aroma_note;
            $review->color_dev              = $request->color_dev;
            $review->defect                 = (isset($request->defect)) ? $request->defect : 0;
            $review->clean_up               = $request->clean_up;
            $review->sweetness              = $request->sweetness;
            $review->defects_note           = $request->defect_note;
            $review->clean_sweet_note       = $request->cleanup_note;
            $review->acidity                = $request->acidity;
            $review->acidity_chk            = $request->acidity_chk;
            $review->mouth_feel             = $request->mouth_feel;
            $review->fm_chk                 = $request->fm_chk;
            $review->flavour                = $request->flavour;
            $review->flavor_note            = $request->flavor_note;
            $review->after_taste            = $request->after_taste;
            $review->balance                = $request->balance;
            $review->sweetness_note          = $request->sweetness_note;
            $review->acidity_note            = $request->acidity_note;
            $review->mouthfeel_note          = $request->mouthfeel_note;
            $review->aftertaste_note         = $request->aftertaste_note;
            $review->balance_note            = $request->balance_note;
            $review->overall_note            = $request->overall_note;
            $review->overall                = $request->overall;
            $review->total_score            = (isset($request->total_score)) ? $request->total_score : 0;
            $review->jury_id                = $request->jury_id;
            $review->sample_id              = $request->sent_sample_id;
            $review->product_id             = $request->product_id;
            $review->manual             = $request->manual_override;
            $review->save();
            if (isset($request->discriptor)) {
                foreach ($request->discriptor as $tag) {
                    $data = Tag::where('tag', $tag)->first();
                    if (!isset($data)) {
                        $descriptor = new Tag();
                        $descriptor->tag = $tag;
                        $descriptor->review_id = $review->id;
                        $descriptor->jury_id = $review->jury_id;
                        $descriptor->save();
                    }
                }
            }
            $sampleSent2 = SentToJury::where('jury_id',  $request->jury_id)
                //  ->where('temporary_link',$request->link)
                ->where('is_hidden', '0')
                ->orderBy('tables', 'asc')
                ->orderBy('postion', 'asc')
                ->first();
        }
        if ($request->final_submit_id == 1) {
            $alltablesamples = SentToJury::where('sample_sent_to_jury.jury_id', $request->jury_id)
                ->where('sample_sent_to_jury.tables', $request->table_value)
                ->where('sample_sent_to_jury.is_hidden', '0')
                ->update(array("is_hidden" => "1"));
            return redirect()->url('/jury/links/' . encrypt($request->jury_id) . '/' . $request->auctionId);
        }
        if (isset($request->sample_submit_prev)) {
            $sample2Sent = SentToJury::where('sample_sent_to_jury.jury_id', $request->jury_id)
                ->where('sample_sent_to_jury.tables', $request->table_value)->where('id', '!=',  $request->sent_sample_id)
                ->where('id', '<',  $request->sent_sample_id)->orderBy('id', 'desc')
                ->orderbyRaw('CAST(sample_sent_to_jury.postion AS unsigned) desc')
                ->first();

            //  dd($request);
            if ($sample2Sent) {
                $sampleSent = $sample2Sent;
            }
        }
        echo "<!--FAIZAN ".print_r($request->sample_submit,true)."-->";

        if (isset($request->sample_submit)) {
            $sample2Sent = SentToJury::where('sample_sent_to_jury.jury_id', $request->jury_id)
                ->where('sample_sent_to_jury.tables', $request->table_value)->where('id', '!=',  $request->sent_sample_id)->where('id', '>',  $request->sent_sample_id)
                ->orderbyRaw('CAST(sample_sent_to_jury.postion AS unsigned) asc')
                ->first();
                echo "<!--FAIZAN ".print_r($sample2Sent,true)."-->";
            if ($sample2Sent) {

                $sampleSent = $sample2Sent;
            } else {
                $alltablesamples = SentToJury::where('sample_sent_to_jury.jury_id', $request->jury_id)
                    ->where('sample_sent_to_jury.tables', $request->table_value)
                    ->where('sample_sent_to_jury.is_hidden', '1')
                    ->update(array("is_hidden" => "0"));
            }
        }
        if ($request->to_go_sample) {
            return redirect()->route('give_review', ['juryId' => $sampleSent->jury_id, 'table' => $sampleSent->tables, 'sampleId' => $request->to_go_sample, 'auctionId' => $request->auctionId])->with('success', 'Review submitted Successuflly');
        } else {
            return redirect()->route('give_review', ['juryId' => $sampleSent->jury_id, 'table' => $sampleSent->tables, 'sampleId' => $sampleSent->id, 'auctionId' => $request->auctionId])->with('success', 'Review submitted Successfully');
        }
    }
    public function form()
    {
        return view('admin.jury.form');
    }
    public function reviewTableData(Request $request)
    {
        $tables = $request->table;
        $auctionId = $request->auctionId;
        $samples = SentToJury::where('auction_id', $request->auctionId)->join('products', 'products.id', 'sample_sent_to_jury.product_id')
            ->join('juries', 'juries.id', 'sample_sent_to_jury.jury_id')
            ->select('products.*', 'sample_sent_to_jury.*', 'juries.name')
            ->where('sample_sent_to_jury.jury_id', $request->juryId)
            ->where('sample_sent_to_jury.tables', $request->table)->orderBy('sample_sent_to_jury.postion', 'asc')
            //   ->where('sample_sent_to_jury.is_hidden', '0')
            ->get();
        $samplesHidden = SentToJury::where('sample_sent_to_jury.jury_id', $request->juryId)
            ->where('sample_sent_to_jury.tables', $request->table)
            ->where('sample_sent_to_jury.is_hidden', '0')
            ->get();
        //   return response($samples);
        $data = view('admin.sample_table', compact('samples', 'tables', 'samplesHidden', 'auctionId'))->render();
        return response()->json(array('success' => true, 'html' => $data));
    }

    public function reviewedSamples()
    {
        $samples = SentToJury::groupBy('samples')
            ->select('samples', DB::raw('count(*) as total'))
            // ->where('sample_sent_to_jury.is_hidden','=','0')
            ->get();

        if (count($samples) > 0) {
            foreach ($samples as $key => $value) {
                $count = SentToJury::where(['samples' => $value->samples, 'is_hidden' => "1"])->count();
                $reviewed[$key] = $count;
            }
        } else {
            $reviewed = array();
        }

        $dateArr = array();
        foreach ($samples as $key => $value) {
            $sampleDate = SentToJury::where('samples', $value->samples)->first();
            array_push($dateArr, $sampleDate->created_at);
        }
        $opencupping = false;
        return view('admin.reviewed_samples', compact('samples', 'reviewed', 'dateArr', 'opencupping'));
    }
    public function reviewSummary()
    {
        $reviews = Review::join('juries', 'reviews.jury_id', 'juries.id')
            ->join('products', 'reviews.product_id', 'products.id')
            ->join('sample_sent_to_jury', 'reviews.sample_id', 'sample_sent_to_jury.id')
            ->select(
                'sample_sent_to_jury.samples as sampleId',
                'sample_sent_to_jury.jury_id as jury_id',
                'juries.name as name',
                'products.product_title as product',
                'reviews.total_score as total'
            )
            ->where('sample_sent_to_jury.is_hidden', '1')
            ->get();
        return view('admin.reviewed_summary', compact('reviews'));
    }

    public function reviewSummaryCsv()
    {
        $fileName = urlencode("Reviewed_Sample_Summary_" . date("Y-m-d") . ".csv");
        $reviews  = Review::join('juries', 'reviews.jury_id', 'juries.id')
            ->join('products', 'reviews.product_id', 'products.id')
            ->join('sample_sent_to_jury', 'reviews.sample_id', 'sample_sent_to_jury.id')
            ->select(
                'sample_sent_to_jury.samples as sampleId',
                'sample_sent_to_jury.jury_id as jury_id',
                'juries.name as name',
                'products.product_title as product',
                'reviews.total_score as total'
            )
            ->where('sample_sent_to_jury.is_hidden', '1')
            ->get();
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );
        $columns = array('Sample', 'Jury', 'Total');
        $callback = function () use ($reviews, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            foreach ($reviews as $task) {
                $row['Sample']  =   $task["sampleId"];
                $row['Jury']    =   $task["name"];
                $row['Total']   =   $task["total"];
                fputcsv($file, array($row['Sample'], $row['Jury'], $row['Total']));
            }
            fclose($file);
        };
        return response()->streamDownload($callback, $fileName, $headers);
        // return (new StreamedResponse($callback, 200, $headers))->sendContent();
    }

    public function reviewDetail($sample)
    {
        $sampleID  = $sample;
        $data      = array();
        $sampleSentToJuries = SentToJury::where(['samples' => $sample])->get();
        foreach ($sampleSentToJuries as $key => $value) {
            $jury                           =   Jury::where('id', $value['jury_id'])->first();
            $product                        =   Product::where('id', $value["product_id"])->first();
            $review                         =   Review::where('sample_id', $value->id)->first();
            $data[$key]['name']             =   $jury->name ?? '--';
            $data[$key]['total']            =   $review->total_score ?? '0';
            $data[$key]['productName']      =   $product->product_title;
            $data[$key]['sample']           =   $value['samples'];
            $data[$key]['aroma_dry']        =   $review->aroma_dry ?? '0.0';
            $data[$key]['aroma_crust']      =   $review->aroma_crust ?? '0.0';
            $data[$key]['aroma_break']      =   $review->aroma_break ?? '0.0';
            // $data[$key]['aroma_note']    =   $review->aroma_note ?? '---';
            $data[$key]['clean_up']         =   $review->clean_up ?? '0.0';
            $data[$key]['clean_sweet_note'] =   $review->clean_sweet_note ?? '';
            $data[$key]['sweetness']        =   $review->sweetness ?? '0.0';
            $data[$key]['sweetness_note']   =   $review->sweetness_note ?? '';
            $data[$key]['acidity']          =   isset($review->acidity) ? $review->acidity : '0.0' . '-' . (isset($review->acidity_chk) ? $review->acidity_chk : 'L') ?? '0.0-L';
            $data[$key]['acidity_note']     =   $review->acidity_note ?? '';
            $data[$key]['flavour']          =   $review->flavour ?? '0.0';
            $data[$key]['flavour_note']     =   $review->flavour_note ?? '';
            $data[$key]['after_taste']      =   isset($review->after_taste) ? $review->after_taste : '0.0' . '-' . (isset($review->fm_chk) ? $review->fm_chk : 'L') ?? '0.0-L';
            $data[$key]['aftertaste_note']  =   $review->aftertaste_note ?? '';
            $data[$key]['balance']          =   $review->balance ?? '0.0';
            $data[$key]['balance_note']     =   $review->balance_note ?? '';
            $data[$key]['overall']          =   $review->overall ?? '0.0';
            $data[$key]['overall_note']     =   $review->overall_note ?? '';
            // $data[$key]['mouthfeel_note']=   $review->mouthfeel_note ?? '----';
            $data[$key]['roast']            =   isset($review->roast) ? $review->roast . '%' : "0%";
            $data[$key]['defect']           =   isset($review->defect) ? '(' . $review->first_number . '*' . $review->second_number . '*4)=' . $review->defect : "(0*0*4)=0";
            $data[$key]['defect_note']      =   $review->defect_note ?? '';
        }
        return view('admin.reviewed_details', compact('data', 'sampleID'));
    }
    public function reviewDetailCsv($sample)
    {
        $fileName            =  urlencode("Review_Detail_" . date("Y-m-d") . ".csv");
        $data                =  array();
        $sampleSentToJuries  = SentToJury::where(['samples' => $sample])->get();
        foreach ($sampleSentToJuries as $key => $value) {
            $jury                           =   Jury::where('id', $value['jury_id'])->first();
            $product                        =   Product::where('id', $value["product_id"])->first();
            $review                         =   Review::where('sample_id', $value->id)->first();
            $data[$key]['name']             =   $jury->name ?? '--';
            $data[$key]['total']            =   $review->total_score ?? '0';
            $data[$key]['productName']      =   $product->product_title;
            $data[$key]['sample']           =   $value['samples'];
            $data[$key]['aroma_dry']        =   $review->aroma_dry ?? '0.0';
            $data[$key]['aroma_crust']      =   $review->aroma_crust ?? '0.0';
            $data[$key]['aroma_break']      =   $review->aroma_break ?? '0.0';
            // $data[$key]['aroma_note']    =  $review->aroma_note ?? '---';
            $data[$key]['clean_up']         =   $review->clean_up ?? '0.0';
            $data[$key]['clean_sweet_note'] =   $review->clean_sweet_note ?? '----';
            $data[$key]['sweetness']        =   $review->sweetness ?? '0.0';
            $data[$key]['sweetness_note']   =   $review->sweetness_note ?? '----';
            $data[$key]['acidity']          =   isset($review->acidity) ? $review->acidity : '0.0' . '-' . (isset($review->acidity_chk) ? $review->acidity_chk : 'L') ?? '0.0-L';
            $data[$key]['acidity_note']     =   $review->acidity_note ?? '----';
            $data[$key]['flavour']          =   $review->flavour ?? '0.0';
            $data[$key]['flavour_note']     =   $review->flavour_note ?? '---';
            $data[$key]['after_taste']      =   isset($review->after_taste) ? $review->after_taste : '0.0' . '-' . (isset($review->fm_chk) ? $review->fm_chk : 'L') ?? '0.0-L';
            $data[$key]['aftertaste_note']  =   $review->aftertaste_note ?? '----';
            $data[$key]['balance']          =   $review->balance ?? '0.0';
            $data[$key]['balance_note']     =   $review->balance_note ?? '----';
            $data[$key]['overall']          =   $review->overall ?? '0.0';
            $data[$key]['overall_note']     =   $review->overall_note ?? '----';
            // $data[$key]['mouthfeel_note']=  $review->mouthfeel_note ?? '----';
            $data[$key]['roast']            =   isset($review->roast) ? $review->roast . '%' : "0%";
            $data[$key]['defect']           =   isset($review->defect) ? '(' . $review->first_number . '*' . $review->second_number . '*4)=' . $review->defect : "(0*0*4)=0";
            $data[$key]['defect_note']      =   $review->defect_note ?? '---';
        }
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );
        $columns = array('Name', 'Total', 'ProductName', 'Sample', 'Aroma Dry', 'Aroma Crust', 'Aroma Break', 'CleanUp', 'Clean Sweet Note', 'Sweetness', 'Sweetness Note', 'Acidity', 'Acidity Note', 'Flavour', 'Flavour Note', 'AfterTaste', 'AfterTaste Note', 'Balance', 'Balance Note', 'Overall', 'Overall Note', 'Roast', 'Defect', 'Defect Note');
        $callback = function () use ($data, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            foreach ($data as $task) {
                $row['Name']                =   $task["name"];
                $row['Total']               =   $task["total"];
                $row['ProductName']         =   $task["productName"];
                $row['Sample']              =   $task["sample"];
                $row['Aroma Dry']           =   $task["aroma_dry"];
                $row['Aroma Crust']         =   $task["aroma_crust"];
                $row['Aroma Break']         =   $task["aroma_break"];
                $row['CleanUp']             =   $task["clean_up"];
                $row['Clean Sweet Note']    =   $task["clean_sweet_note"];
                $row['Sweetness']           =   $task["sweetness"];
                $row['Sweetness Note']      =   $task["sweetness_note"];
                $row['Acidity']             =   $task["acidity"];
                $row['Acidity Note']        =   $task["acidity_note"];
                $row['Flavour']             =   $task["flavour"];
                $row['Flavour Note']        =   $task["flavour_note"];
                $row['AfterTaste']          =   $task["after_taste"];
                $row['AfterTaste Note']     =   $task["aftertaste_note"];
                $row['Balance']             =   $task["balance"];
                $row['Balance Note']        =   $task["balance_note"];
                $row['Overall']             =   $task["overall"];
                $row['Overall Note']        =   $task["overall_note"];
                $row['Roast']               =   $task["roast"];
                $row['Defect']              =   $task["defect"];
                $row['Defect Note']         =   $task["defect_note"];
                fputcsv($file, array($row['Name'], $row['Total'], $row['ProductName'], $row['Sample'], $row['Aroma Dry'], $row['Aroma Crust'], $row['Aroma Break'], $row['CleanUp'], $row['Clean Sweet Note'], $row['Sweetness'], $row['Sweetness Note'], $row['Acidity'], $row['Acidity Note'], $row['Flavour'], $row['Flavour Note'], $row['AfterTaste'], $row['AfterTaste Note'], $row['Balance'], $row['Balance Note'], $row['Overall'], $row['Overall Note'], $row['Roast'], $row['Defect'], $row['Defect Note']));
            }
            fclose($file);
        };
        return response()->streamDownload($callback, $fileName, $headers);
    }
}
