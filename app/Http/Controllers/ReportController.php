<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ReportExport;
use App\Models\Release;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
class ReportController extends Controller
{
    //

    public function index(){
      
       $report = Release::get();
        return view('reports', compact('report'));  
        
    }
   public function report(){
    $response = Release::all();
    return response()->json($response);
   }

    public function exportCsv($startDate, $endDate)
    {
        // Fetch data from the users table based on date range
        $data = DB::table('releases')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get();
    
        // Define CSV header
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=export.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
    
        // Create a file handle
        $output = fopen("php://output", "w");
    
        // Write CSV headers
        fputcsv($output, array_keys((array) $data[0]));
    
        // Write CSV data
        foreach ($data as $row) {
            fputcsv($output, (array) $row);
        }
    
        // Close the file handle
        fclose($output);
    
        // Return the CSV file as a download response
        return Response::make('', 200, $headers);
    }


}
