<?php

namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Http\Requests\Property\UpdatePropertystep1Request;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;

class PropertyController extends Controller
{
    public function home()
    {
        $languages = DB::table('languages')->get();
        return view('home', ['languages' => $languages]);
    }

//    public function first_step()
//    {
//        if (request()->segment(1) == 'en') {
//            $lang_code = 'en_US';
//        } elseif (request()->segment(1) == 'es') {
//            $lang_code = 'es_ES';
//        } elseif (request()->segment(1) == 'fr') {
//            $lang_code = 'fr_FR';
//        } elseif (request()->segment(1) == 'it') {
//            $lang_code = 'it_IT';
//        } elseif (request()->segment(1) == 'de') {
//            $lang_code = 'de_DE';
//        }
//
//        $countries = DB::table('countries')->get();
//        $states = DB::table('states')->get();
//        $cities = DB::table('cities')->get();
//        $categoriess = DB::table('re_categories')->get();
//        $categories = DB::table('re_categories_translations')->where('lang_code', $lang_code)->get();
//
//        return view('property.first-step', ['categories' => $categories,'categoriess' => $categoriess,
//            'countries' => $countries, 'states' => $states, 'cities' => $cities]);
//    }
    public function create_peoperty()
    {
        if (request()->segment(1) == 'en') {
            $lang_code = 'en_US';
        } elseif (request()->segment(1) == 'es') {
            $lang_code = 'es_ES';
        } elseif (request()->segment(1) == 'fr') {
            $lang_code = 'fr_FR';
        } elseif (request()->segment(1) == 'it') {
            $lang_code = 'it_IT';
        } elseif (request()->segment(1) == 'de') {
            $lang_code = 'de_DE';
        }

        $countries = DB::table('countries')->get();
        $states = DB::table('states')->get();
        $cities = DB::table('cities')->get();
        $categoriess = DB::table('re_categories')->get();
        $categories = DB::table('re_categories_translations')->where('lang_code', $lang_code)->get();
        $languages = DB::table('languages')->get();

        return view('createProperties', ['categories' => $categories, 'categoriess' => $categoriess,
            'countries' => $countries, 'states' => $states, 'cities' => $cities, 'languages' => $languages]);
    }

    public function store(Request $request)
    {

        DB::table('re_properties')->insert([
            'type' => $request->input('type'),
            'category_id' => $request->input('category_id'),
            'country_id' => $request->input('country_id'),
            'state_id' => $request->input('state_id'),
            'city_id' => $request->input('city_id'),
            'location' => $request->input('location'),
            'author_id' => auth()->user()->id,
            'author_type' => 'Botble\RealEstate\Models\Account',

        ]);

        return redirect()->route('second_step1');
    }

    public function show()
    {
        $property = DB::table('re_properties')->orderBy('id', 'DESC')->first();
        $languages = DB::table('languages')->get();

        return view('details', ['property' => $property->id, 'languages' => $languages]);
    }

    public function update_property_step1(UpdatePropertystep1Request $request, $property)
    {
        $property = DB::table('re_properties')->orderBy('id', 'DESC')->first();
        DB::table('re_properties')->where('id', $property->id)
            ->update([
                'name' => $request->name ?? $property->name,
                'description' => $request->description ?? $property->description,
                'content' => $request->input('content') ?? $property->content,
                'square' => $request->square ?? $property->square,
                'square_construction' => $request->square_construction ?? $property->square_construction,
                'number_floor' => $request->number_floor ?? $property->number_floor,
                'number_bedroom' => $request->number_bedroom ?? $property->number_bedroom,
                'number_bathroom' => $request->number_bathroom ?? $property->number_bathroom,
                'number_wc' => $request->number_wc ?? $property->number_wc,
                'construction_year' => $request->construction_year ?? $property->construction_year,
                'last_reconstruction' => $request->last_reconstruction ?? $property->last_reconstruction,
                'last_renovation' => $request->last_renovation ?? $property->last_renovation,
                'available_date' => $request->available_date ?? $property->available_date,
                'price' => $request->price ?? $property->price,
                'currency_id' => $request->currency_id ?? $property->currency_id,
                'additional_costs' => $request->additional_costs ?? $property->additional_costs,
                'net_rent' => $request->net_rent ?? $property->net_rent,
            ]);

        return redirect()->route('step2', ['property' => $property->id]);
    }

    public function step2($property)
    {
        if (request()->segment(1) == 'en') {
            $lang_code = 'en_US';
        } elseif (request()->segment(1) == 'es') {
            $lang_code = 'es_ES';
        } elseif (request()->segment(1) == 'fr') {
            $lang_code = 'fr_FR';
        } elseif (request()->segment(1) == 'it') {
            $lang_code = 'it_IT';
        }elseif (request()->segment(1) == 'de') {
            $lang_code = 'de_DE';
        }

        $facilitiess = DB::table('re_facilities')->get();
        $facilities = DB::table('re_facilities_translations')->where('lang_code', $lang_code)->get();
        if (request()->segment(1) == 'de') {
            $features = DB::table('re_features')->get();
            $facilitiess = DB::table('re_facilities')->get();
        } else {
            $features = DB::table('re_features_translations')->where('lang_code', $lang_code)->get();
            $facilities = DB::table('re_facilities_translations')->where('lang_code', $lang_code)->get();
        }


        $languages = DB::table('languages')->get();

        $property = DB::table('re_properties')->orderBy('id', 'DESC')->first();
        $all_facility_distance = DB::table('re_facilities_distances')->where('reference_id', $property->id)->get();

        return view('details2', ['property' => $property->id,
            'features' => $features, 'facilities' => $facilities,
            'languages' => $languages,
            'facilitiess' => $facilitiess,
            'all_facility_distance' => $all_facility_distance]);
    }


    public function destroy($id)
    {

        $data = DB::table('new')->where('id', $id)->first();

//        DB::delete('delete from new where id = ?',[$id]);

        return redirect()->back();
    }

    public function fetchState(Request $request)
    {
        $data['states'] = DB::table('states')->where("country_id", $request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function fetchCity(Request $request)
    {
        $data['cities'] = DB::table('cities')->where("state_id", $request->state_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function update_feature_facility(Request $request, $property)
    {

        $property = DB::table('re_properties')->orderBy('id', 'DESC')->first();

        foreach (request()->input('features') as $index) {

            $feature = DB::table('re_features_translations')->where('name', $index)->first();

            DB::table('re_property_features')->insert([
                'property_id' => $property->id,
                'feature_id' => $feature->re_features_id,
            ]);
        }
        foreach (request()->input('facility_id') as $item) {
            $facility = DB::table('re_facilities_translations')->where('re_facilities_id', $item)->first();
                DB::table('re_facilities_distances')->insert([
                    'reference_type' => 'Botble\RealEstate\Models\Property',
                    'reference_id' => $property->id,
                    'facility_id' => $facility->re_facilities_id,
                    'distance' => $request->input('distance'),
                ]);
        }

        $languages = DB::table('languages')->get();

//        foreach ($request->file('images') as $image) {
//
//               $image->store('image', 'public');
//
//        }
//        dd('here');
//        $images = $request->get('images', []);
//        if ($request->hasfile('pFiles')) {
//            $images = array_merge($images,
//                $this->saveFile($request->file('pFiles')));
//        }
//        if ($request->hasfile('pVideos')) {
//            $images = array_merge($images,
//                $this->saveFile($request->file('pVideos'), 'videos'));
//        }
//        if ($request->hasfile('pImages')) {
//            $images = array_merge($images,
//                $this->saveFile($request->file('pImages'), 'images', true));
//        }
//
//        $request->merge([
//            'images' => $images/*, 'videos' => $videos*/
//        ]);
        dd($request);

        return view('details3', ['property' => $property->id, 'languages' => $languages]);

    }
    private function saveFile($files, $path = 'files', $isImage = false)
    {
        $collect = collect();
        $url = URL::to('/');
        foreach ($files as $file) {
            $fileName = time().rand(0, 1000);
            $fileName150x150 = $fileName.'-150x150.'
                .$file->getClientOriginalExtension();
            $fileName410x270 = $fileName.'-410x270.'
                .$file->getClientOriginalExtension();
            $fileName = $fileName.'.'
                .Str::lower($file->getClientOriginalExtension());
            $image_resize = Image::make($file->getRealPath());
            $file->move(public_path().'/properties/'.$path, $fileName);
            $collect->push($url.'/properties/'.$path.'/'.$fileName);
            if ($isImage) {
                $image_resize->resize(150, 150);
                $image_resize->save(public_path('/properties/'
                    .$path.'/'.$fileName150x150));
                $image_resize->resize(410, 270);
                $image_resize->save(public_path('/properties/'
                    .$path.'/'.$fileName410x270));
            }
        }
        return $collect->all();
    }
    public function update_property_step2(Request $request, $property)
    {

        $property = DB::table('re_properties')->orderBy('id', 'DESC')->first();

        foreach (request()->input('features') as $index) {

            $feature = DB::table('re_features_translations')->where('name', $index)->first();

            DB::table('re_property_features')->insert([
                'property_id' => $property->id,
                'feature_id' => $feature->re_features_id,
            ]);
        }
        DB::table('re_facilities_distances')->insert([
            'reference_type' => 'Botble\RealEstate\Models\Property',
            'reference_id' => $property->id,
            'facility_id' => $request->input('facility_id'),
            'distance' => $request->input('distance'),
        ]);

        return redirect()->route('step3', $property->id);

    }

    public function store_facility(Request $request)
    {
        $property = DB::table('re_properties')->orderBy('id', 'DESC')->first();

        DB::table('re_facilities_distances')->insert([
            'reference_type' => 'Botble\RealEstate\Models\Property',
            'reference_id' => $property->id,
            'facility_id' => $request->input('facility_id'),
            'distance' => $request->input('distance'),
        ]);
        return redirect()->back();
    }

    public function step3($property)
    {
        $property = DB::table('re_properties')->orderBy('id', 'DESC')->first();
        $languages = DB::table('languages')->get();

        return view('details3', ['property' => $property->id, 'languages' => $languages]);
    }

    public function update_property_step3(Request $request, $property)
    {

        $request->validate([
            'contact_name' => ['required', 'string'],
            'contact_phone_number' => ['required', 'string'],
        ]);

        DB::table('re_properties')->update([
            'contact_name' => $request->input('contact_name'),
            'contact_phone_number' => $request->input('contact_phone_number'),
            'advertising_type' => $request->input('advertising_type'),
            'status' => $request->input('status'),
        ]);

        $property = Property::orderBy('id', 'DESC')->first();
        $packages = DB::table('re_packages')->get();
        $languages = DB::table('languages')->get();

        return view('details4', ['property' => $property->id, 'packages' => $packages
            , 'languages' => $languages]);

//        return view('details3', ['property'=>$property]);

    }

    public function step4($property)
    {
        $property = DB::table('re_properties')->orderBy('id', 'DESC')->first();

        return view('property.fifth-step', ['property' => $property->id]);
    }

    public function update_property_step4($property)
    {

//        dd('here');
    }

    public function show_package($property, $package)
    {
        $property = DB::table('re_properties')->orderBy('id', 'DESC')->first();
        $languages = DB::table('languages')->get();

        $package = DB::table('re_packages')->where('id', request()->segment(6))->first();
        DB::table('re_properties')->where('id', request()->segment(5))->update([
            'package' => request()->segment(6),
        ]);

        return view('details5', ['package' => $package, 'property' => $property->id, 'languages' => $languages]);
    }

    public function publish($property)
    {
        $property = DB::table('re_properties')->orderBy('id', 'DESC')->first();
        $languages = DB::table('languages')->get();

        return view('details6', ['property' => $property->id, 'languages' => $languages]);
    }

    public function properties()
    {
        $languages = DB::table('languages')->get();
        $properties = DB::table('re_properties')->where('author_id', auth()->user()->id)->get();

        return view('myProperties', ['languages' => $languages, 'properties' => $properties]);

    }

    public function update_profile(Request $request)
    {

        $account = DB::table('re_accounts')->where('id', auth()->user()->id)->first();
        DB::table('re_accounts')->where('id', auth()->user()->id)->update([
            'first_name' => $request->first_name ?? $account->first_name,
            'last_name' => $request->last_name ?? $account->last_name,
            'username' => $request->username ?? $account->username,
            'phone' => $request->phone ?? $account->phone,
            'email' => $request->email ?? $account->email,
            'gender' => $request->gender ?? $account->gender,
//                'company' => $request->company ?? $account->company,
            'dob' => $request->dob ?? $account->dob,
        ]);

        return redirect()->back();
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $account = DB::table('re_accounts')->where('id', auth()->user()->id)->first();

        DB::table('re_accounts')->where('id', auth()->user()->id)->update([
            'password' => bcrypt($request['password']),
        ]);

        return redirect()->back();
    }
}
