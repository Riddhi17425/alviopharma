<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Milestone;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\HomeMap;
use App\Models\OurProduction;
use App\Models\Brand;
use App\Models\Clientel;
use App\Models\MenuBanner;
use App\Models\Product;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        return view('auth.login');
    }
    public function admin(){
        return view('admin.admin');
    }
    public function index()
    {  
        $metatitle = "";
        $metadescription = "";
        $units =  HomeMap::where('cat_type','homemap')->get();
        $blogs = Blog::whereNull('deleted_at')->orderBy('id', 'desc')->get();
        return view('front.dashboard',compact('metatitle','metadescription','blogs','units'));
    }

    public function manufacturing()
    {
        $metatitle = "";
        $metadescription = "";

        $menubanner = MenuBanner::whereNull('deleted_at')
        ->where('url', 'manufacturing')
        ->first();
        $productions = OurProduction::where('cat_type','ourproduction')->get();
        $clientels = Clientel::all();
        return view('front.manufacturing',compact('metatitle','metadescription' , 'productions', 'clientels','menubanner'));
    }

    public function contact()
    {
        $metatitle = "";
        $metadescription = "";

        $menubanner = MenuBanner::whereNull('deleted_at')
        ->where('url', 'contact')
        ->first();

        return view('front.contact',compact('metatitle','metadescription','menubanner'));
    }

    public function inquirystore(Request $request)
    {
        //echo "call"; die;
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'nullable',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'message' => 'nullable|string|max:1000',
        ]);

        Contact::create($validated);

        return redirect()->route('thank-you')
                        ->with('success', 'Your inquiry has been submitted successfully!');
    }

    public function thankyou()
    {
        $metatitle = "";
        $metadescription = "";
        return view('front.thank-you',compact('metatitle','metadescription'));
    }

    public function blogs()
    {
        $metatitle = "";
        $metadescription = "";
        $blogs = Blog::whereNull('deleted_at')->orderBy('id', 'desc')->get();
        $menubanner = MenuBanner::whereNull('deleted_at')
        ->where('url', 'blogs')
        ->first();
        return view('front.blogs',compact('metatitle','metadescription','blogs','menubanner'));
    }

    public function blogsdetail($url){
        $blogsdetail = Blog::whereNull('deleted_at')->where('url', $url)->first();
        $metatitle = $blogsdetail->meta_title;
        $metadescription = $blogsdetail->meta_description;
        return view('front.blogs-details',compact('metatitle', 'metadescription','blogsdetail'));
    }

    public function boardDirectors()
    {
        $metatitle = "";
        $metadescription = "";

        $menubanner = MenuBanner::whereNull('deleted_at')
        ->where('url', 'board-directors')
        ->first();
        return view('front.board-directors',compact('metatitle','metadescription' , 'menubanner'));
    }

    public function ourHeritage()
    {
        $metatitle = "";
        $metadescription = "";
        $menubanner = MenuBanner::whereNull('deleted_at')
        ->where('url', 'our-heritage')
        ->first();

        $milestones = Milestone::orderBy('year','desc')->get();

        return view('front.our-heritage',compact('metatitle','metadescription','milestones','menubanner'));
    }

    public function ourCompany()
    {
        $metatitle = "";
        $metadescription = "";

        $clientels = Clientel::all();
        $units = HomeMap::where('cat_type','companymap')->get();
        $menubanner = MenuBanner::whereNull('deleted_at')
        ->where('url', 'our-company')
        ->first();
        return view('front.our-company',compact('metatitle','metadescription','clientels','units','menubanner'));
    }

    public function sustainability()
    {
        $metatitle = "";
        $metadescription = "";
        $ourprinciples = OurProduction::where('cat_type','Ourprinciple')->get();
        $ourresponsibility = OurProduction::where('cat_type','Ourresponsibility')->get();
         $menubanner = MenuBanner::whereNull('deleted_at')
        ->where('url', 'sustainability')
        ->first();
        return view('front.sustainability',compact('metatitle','metadescription', 'ourprinciples','ourresponsibility','menubanner'));
    }

    public function therapeuticArea()
    {
        $metatitle = "";
        $metadescription = "";

         $menubanner = MenuBanner::whereNull('deleted_at')
        ->where('url', 'therapeutic-area')
        ->first();

        return view('front.therapeutic-areas',compact('metatitle','metadescription','menubanner'));
    }


    
   public function productlist(Request $request)
    {
        $brands = Brand::orderBy('title', 'asc')->get();
    
        $brandId = $request->brand;
        $sortOrder = $request->sort ?? 'asc';
        $letterFilter = $request->letter;
        $search = $request->search;
    
        $query = Product::with('brand');
    
        // Brand filter
        if ($brandId) {
            $query->where('brand_id', $brandId);
        }
    
        // Alphabet filter
        if ($letterFilter) {
            $query->where('name', 'like', $letterFilter . '%');
        }
    
        // Search
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
    
        // Sorting
        $query->orderBy('name', $sortOrder);
    
        $products = $query->get();
    
        // Alphabet grouping
        $groupedProducts = $products->groupBy(function ($product) {
            return strtoupper(substr($product->name, 0, 1));
        });
    
        return view('front.product-list', compact('brands','groupedProducts','brandId',
                        'sortOrder','letterFilter','search'));
    }

    public function productDetails()
    {
    
        return view('front.product-details');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
 
}