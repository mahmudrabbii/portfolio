<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function getStats()
    {
        // Run MySQL query
        $projectdata = DB::select("SELECT COUNT(*) AS totalProjects FROM projects");

        // Get the value from the result
        $totalProjects = $projectdata[0]->totalProjects;


        $skilldata = DB::select("SELECT COUNT(*) AS totalSkills FROM skills");
        $totalSkills = $skilldata[0]->totalSkills;

        $messageData = DB::select("SELECT COUNT(*) AS totalMessages FROM query_messages");
        $totalMessages = $messageData[0]->totalMessages;

        $visitordata = DB::select("SELECT SUM(total_visitors) AS totalVisitors FROM visitor_daily_stats");
        $totalVisitors = $visitordata[0]->totalVisitors;

/*
        $visitordatadaily = DB::select("SELECT visit_date, SUM(total_visitors) AS visitors
                                   FROM visitor_daily_stats
                                   GROUP BY visit_date
                                   ORDER BY visit_date ASC;");
                                   
        $totalVisitorsdaily = $visitordatadaily[0]->visitors;

        */


$visitorData = DB::table('visitor_daily_stats')
    ->select(DB::raw('visit_date, SUM(total_visitors) as visitors'))
    ->groupBy('visit_date')
    ->orderBy('visit_date', 'asc')
    ->get();


$maxVisitors = $visitorData->max('visitors');

/*
return view('dashboard', ['visitorData' => $visitorData]);
*/
        return [
            'totalProjects' => $totalProjects,
            'totalSkills' => $totalSkills,
            'totalMessages' => $totalMessages,
            'totalVisitors' => $totalVisitors,
            'visitorData' => $visitorData,
            'maxVisitors' => $maxVisitors
        ];

       /* 
        log::info("Total Projects: $totalProjects");
        log::info("Total Skills: $totalSkills");
        log::info("Total Messages: $totalMessages");
        log::info("Total Visitors: $totalVisitors"); exit;

        */
    }

    public function forPortfolio()
    {
        return view('portfolio', $this->getStats());
    }

    public function forDashboard()
    {
        return view('pages.dashboard', $this->getStats());




}

}

/*
 Log::info('DashboardController@index called'); // Debugging line to check if the method is being called

    try {
        // Attempt to get the PDO connection
        DB::connection()->getPdo();

        // If successful
        Log::info('Database connection successful.');
        return 'Database connection successful!';
    } catch (\Exception $e) {
        // If connection fails, log the error and return message
        Log::error('Database connection failed: ' . $e->getMessage());
        return 'Database connection failed: ' . $e->getMessage();
    }
        */