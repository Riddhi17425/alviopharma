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
use App\Models\Category;
use App\Models\Clientel;
use App\Models\Divisions;
use App\Models\KeyIngredient;
use App\Models\MenuBanner;
use App\Models\Product;
use App\Models\TherapeuticArea;
use App\Models\NewsletterSubscription;

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
        $units =  HomeMap::where('cat_type','companymap')->get();
        $blogs = Blog::whereNull('deleted_at')->orderBy('id', 'desc')->get();
        $featuredproducts = Product::where('top_sellers', 'Yes')
            ->with(['category' => function ($q) {
                $q->where('status', 'Active');
            }])
            ->latest()->take(10)->get();
        
        return view('front.dashboard',compact('metatitle','metadescription','blogs','units','featuredproducts'));
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

    public function privacy()
    {
        $metatitle = "";
        $metadescription = "";

        $menubanner = MenuBanner::whereNull('deleted_at')
        ->where('url', 'privacy')
        ->first();

        return view('front.privacy',compact('metatitle','metadescription','menubanner'));
    }

     public function termsConditions()
    {
        $metatitle = "";
        $metadescription = "";

        $menubanner = MenuBanner::whereNull('deleted_at')
        ->where('url', 'termsConditions')
        ->first();

        return view('front.termsConditions',compact('metatitle','metadescription','menubanner'));
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

        $milestones = Milestone::orderBy('year','asc')->get();

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
        // return $units;
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

        $therapeuticAreas = TherapeuticArea::where('status', 'Active')
            ->whereNull('deleted_at')
            ->with('category')
            ->orderBy('id', 'asc')
            ->take(4)
            ->get();

        if ($therapeuticAreas->isEmpty()) {
            $therapeuticAreas = collect([
                (object) [
                    'title' => 'Cardiology & Chronic Care',
                    'sub_title' => 'Restoring Vitality through Precision',
                    'sort_description' => "Managing cardiovascular and chronic conditions requires therapeutic consistency, patient safety, and dependable treatment support. Alvio's focused formulations are designed to support long-term care management with confidence.",
                    'approach_description' => "Advanced formulations designed for chronic care support.\nFocused therapeutic strategies for long-term management.\nPatient-centric solutions aligned with treatment continuity.\nReliable quality standards across every formulation.",
                    'button_text' => 'Explore Cardiology & Chronic Care',
                ],
                (object) [
                    'title' => 'Dermatology & Cosmetology',
                    'sub_title' => 'The Science of Skin Integrity',
                    'sort_description' => 'Healthy skin requires targeted care backed by science and formulation expertise. Our dermatology portfolio is designed to support skin balance, barrier protection, and visible skin wellness through clinically focused solutions.',
                    'approach_description' => "Targeted formulations for acne-prone and sensitive skin.\nBarrier-supportive ingredients for skin wellness.\nNon-comedogenic and skin-friendly compositions.\nDesigned for visible skin comfort and care.",
                    'button_text' => 'Explore Dermatology & Cosmetology',
                ],
                (object) [
                    'title' => 'Diabetology & Metabolic Care',
                    'sub_title' => 'Mastering Metabolic Equilibrium',
                    'sort_description' => "Effective metabolic care depends on consistency, therapeutic balance, and patient-focused innovation. Alvio's diabetology range supports modern treatment pathways through quality-driven formulations.",
                    'approach_description' => "Formulations designed to support metabolic balance.\nPatient-focused therapeutic care strategies.\nReliable quality for long-term treatment support.\nScience-backed approach across diabetic care solutions.",
                    'button_text' => 'Explore Diabetology & Metabolic Care',
                ],
                (object) [
                    'title' => 'Nutraceuticals',
                    'sub_title' => 'Preventive Wellness, Redefined',
                    'sort_description' => "Wellness today requires proactive nutritional support backed by science and quality assurance. Alvio's nutraceutical portfolio is developed to support daily wellness, immunity, and lifestyle-focused health needs.",
                    'approach_description' => "Carefully selected wellness-focused ingredients.\nQuality-driven formulations for daily health support.\nScience-backed nutritional supplementation.\nDesigned to support modern preventive wellness.",
                    'button_text' => 'Explore Nutraceuticals',
                ],
            ]);
        }

        return view('front.therapeutic-areas',compact('metatitle','metadescription','menubanner', 'therapeuticAreas'));
    }


    
    public function productlist(Request $request, $category)
    {
        $brands = Brand::orderBy('title', 'asc')->get();
        $allDivisions = Divisions::where('status' , 'Active')->get();
        $allCategoryes = Category::where('status' , 'Active')->get();
        $brandId = $request->brand;
        $division = $request->division;   
        $currentCategory = $category;
        $sortOrder = $request->sort ?? 'asc';
        $letterFilter = $request->letter;
        $search = $request->search;

        $query = Product::with(['brand', 'divisions'])->where('status' , 'Active'); // load division

        if ($brandId) {
            $query->where('brand_id', $brandId);
        }

        if ($division) {
            $query->where('divisions_url', $division);
        }

        if ($currentCategory && $currentCategory !== 'all') {
            $query->where('category_url', $currentCategory);
        } elseif ($currentCategory === 'all' && $request->filled('category')) {
            // Backward compatibility: /products/all?category=some-category
            $query->where('category_url', $request->category);
        }

        // Alphabet filter
        if ($letterFilter) {
            $query->where('name', 'like', $letterFilter . '%');
        }

        // Search
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                ->orWhereHas('brand', function ($brandQuery) use ($search) {
                    $brandQuery->where('title', 'like', '%' . $search . '%');
                });
            });
        }

        // Sorting
        $query->orderBy('name', $sortOrder);

        $products = $query->get();
        // Grouping
        $groupedProducts = $products->groupBy(function ($product) {
            return strtoupper(substr($product->name, 0, 1));
        });

        $divisions = Divisions::where('status', 'Active')->get();

        return view('front.product-list', compact(
            'groupedProducts',
            'brandId',
            'division', // pass for active state
            'currentCategory',
            'sortOrder',
            'letterFilter',
            'search',
            'brands',
            'allDivisions',
            'allCategoryes',
            'divisions'
        ));
    }

    public function productDetails($url)
    {
        $productDetails = Product::with(['category', 'divisions'])
            ->where('status', 'Active')
            ->where('url', $url)
            ->firstOrFail();

        $metatitle = $productDetails->meta_title ?? '';
        $metadescription = $productDetails->meta_description ?? '';


        $ingrediant_details = json_decode($productDetails->key_ingredients);
        return view('front.product-details', compact(
            'productDetails',
            'metadescription',
            'metatitle',
            'ingrediant_details'
        ));
    }

     public function valuesPurpose()
    {
    
        return view('front.values-purpose');
    }

    /**
     * Handle newsletter subscription form submission.
     */
    public function newsletterSubscribe(Request $request)
    {
        // Laravel validation
        $request->validate([
            'newsletter_email'   => 'required|email|max:255',
            'newsletter_consent' => 'accepted',
        ], [
            'newsletter_email.required'   => 'Please enter your email address.',
            'newsletter_email.email'      => 'Please enter a valid email address.',
            'newsletter_consent.accepted' => 'You must agree to subscribe.',
        ]);

        $email = $request->newsletter_email;

        // Store or update subscription
        $subscription = NewsletterSubscription::updateOrCreate(
            ['email' => $email],
            [
                'is_subscribed' => true,
                'ip_address'    => $request->ip(),
            ]
        );

        $adminEmail = config('mail.from.address', 'info@alviopharma.com');
        $fromEmail  = $adminEmail;
        $fromName   = config('mail.from.name', 'Alvio Pharma');
        try {
            // Mail to admin
            Mail::send([], [], function ($message) use ($email, $adminEmail, $fromEmail, $fromName) {
                $htmlBody = '<h2 style="font-family:sans-serif;color:#1a3c5e;">New Newsletter Subscription</h2>'
                        . '<p style="font-family:sans-serif;">A new user has subscribed to the Alvio Pharma newsletter.</p>'
                        . '<p style="font-family:sans-serif;"><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>'
                        . '<p style="font-family:sans-serif;">Please add them to your mailing list.</p>';

                $message->to($adminEmail)
                        ->from($fromEmail, $fromName)
                        ->subject('New Newsletter Subscription')
                        ->setBody($htmlBody, 'text/html');
            });

            // Mail to subscriber
            Mail::send([], [], function ($message) use ($email, $fromEmail, $fromName) {
                $htmlBody = '<div style="font-family:sans-serif;max-width:600px;margin:auto;">'
                        . '<h2 style="color:#1a3c5e;">Thank You for Subscribing!</h2>'
                        . '<p>Dear Subscriber,</p>'
                        . '<p>Thank you for subscribing to the <strong>Alvio Pharma</strong> newsletter.</p>'
                        . '<p>If you did not subscribe, please ignore this email.</p>'
                        . '<br><p style="color:#888;">Warm regards,<br>Team Alvio Pharmaceuticals</p>'
                        . '</div>';

                $message->to($email)->from($fromEmail, $fromName)
                        ->subject('Thank You for Subscribing - Alvio Pharma')
                        ->setBody($htmlBody, 'text/html');
            });
        }catch (\Exception $e) {
            // Log or handle the exception
            \Log::info($e->getMessage());
        }

        return redirect()->route('thank-you')->with('success', 'Thank you for subscribing! Please check your inbox.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
 
}