<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class RoadmapController extends Controller
{
    /**
     * Valid career paths
     */
    protected $validPaths = ['soc', 'pen', 'eng', 'mgmt'];
    
    /**
     * Path to view mapping
     */
    protected $viewMap = [
        'soc' => 'roadmap.paths.soc',
        'pen' => 'roadmap.paths.pentest',
        'eng' => 'roadmap.paths.security_engineer',
        'mgmt' => 'roadmap.paths.it_management',
    ];

    /**
     * Show the main dashboard.
     */
    public function index()
    {
        $progress = $this->getUserProgress();
        return view('roadmap.index', [
            'progress' => $progress,
            'activePath' => 'soc'
        ]);
    }

    /**
     * Show a specific career path.
     */
    public function showPath($path)
    {
        if (!in_array($path, $this->validPaths)) {
            abort(404);
        }
        
        $progress = $this->getUserProgress();
        $view = $this->viewMap[$path];
        
        return view('roadmap.index', [
            'progress' => $progress,
            'activePath' => $path,
            'pathContent' => view($view)->render()
        ]);
    }
    
    /**
     * Get only the path content (for Ajax requests)
     */
    public function getPathContent($path)
    {
        if (!in_array($path, $this->validPaths)) {
            abort(404);
        }
        
        return view($this->viewMap[$path]);
    }

    /**
     * Get the user's progress data.
     */
    private function getUserProgress()
    {
        // In a real app, this would come from a database
        return [
            'soc' => 16,
            'pen' => 18,
            'eng' => 15,
            'mgmt' => 20
        ];
    }

    /**
     * Change the application language
     */
    public function changeLanguage($locale)
    {
        if (!in_array($locale, ['en', 'ja'])) {
            abort(400);
        }

        // Set the locale in the session
        Session::put('locale', $locale);
        
        // Redirect back to the previous page
        return redirect()->back();
    }

    /**
     * Switch language via AJAX
     */
    public function switchLanguage(Request $request)
    {
        $locale = $request->input('locale');
        
        if (!in_array($locale, ['en', 'ja'])) {
            return response()->json(['error' => 'Invalid locale'], 400);
        }

        App::setLocale($locale);
        Session::put('locale', $locale);
        request()->session()->put('locale', $locale);

        return response()->json(['success' => true]);
    }
}