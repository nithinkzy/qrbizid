<?php

namespace App\Http\Controllers;

use App\Models\Business_Card;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\QrCodeController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Requests\StoreBusiness_CardRequest;
use App\Http\Requests\UpdateBusiness_CardRequest;

class BusinessCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(request()->tag);
        return view('landing.home', [
            'listings'  => Business_Card::latest()->paginate(4)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Business_Card  $business_Card
     * @return \Illuminate\Http\Response
     */
    public function show(Business_Card $business_Card)
    {
        return view('bizcards.show', [
            'listing' => $business_Card
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bizcards.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBusiness_CardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusiness_CardRequest $request)
    {
        $user_id = auth()->id();

        // Count existing business cards associated with the user
        $existingBusinessCardCount = Business_Card::where('user_id', $user_id)->count();

        // Check if the user has 4 or fewer business cards
        if ($existingBusinessCardCount < 4) {
            $formFields = $request->validated();

            if ($request->hasFile('logo')) {
                $formFields['logo'] = $request->file('logo')->store('logos', 'public');
            }
            if ($request->hasFile('profile_picture')) {
                $formFields['profile_picture'] = $request->file('profile_picture')->store('profile_picture', 'public');
            }
            if ($request->hasFile('document')) {
                $formFields['document'] = $request->file('document')->store('document', 'public');
            }
            $formFields['user_id'] = $user_id;
            // Create a new Business_Card record
            $businessCard = Business_Card::create($formFields);

            // Generate and store QR code using the created Business_Card's ID
            $qrFilePath = QrCodeController::generateAndStore($businessCard->id);

            // Update the qr field in the Business_Card record
            $businessCard->update(['qr' => $qrFilePath]);

            return redirect('/my-account')->with('message', 'Biz Card created successfully !');
        } else {
            return redirect('/my-account')->with('message', 'You have reached the maximum limit of business cards.');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Business_Card  $business_Card
     * @return \Illuminate\Http\Response
     */
    public function edit(Business_Card $business_Card)
    {
        return view('bizcards.edit', ['listing' => $business_Card]);
    }

    /**
     * Update the specified resource in storage.
     *P
     * @param  \App\Http\Requests\UpdateBusiness_CardRequest  $request
     * @param  \App\Models\Business_Card  $business_Card
     * @return \Illuminate\Http\Response
     */
    public function update(Business_Card $business_Card, UpdateBusiness_CardRequest $request)
    {
        // ddd($business_Card);
        // dd($request->file('logo'));

        // Make sure logged user is owner
        if ($business_Card->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $formFields = $request->validated();

        // Get paths of old files before updating
        $oldLogoPath = $business_Card->logo;
        $oldProfilePicturePath = $business_Card->profile_picture;
        $oldDocumentPath = $business_Card->document;

        if ($request->hasFile('logo')) {
            // Delete old logo file
            if ($oldLogoPath) {
                Storage::disk('public')->delete($oldLogoPath);
            }
            // Store new logo file
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('profile_picture')) {
            // Delete old profile picture file
            if ($oldProfilePicturePath) {
                Storage::disk('public')->delete($oldProfilePicturePath);
            }
            // Store new profile picture file
            $formFields['profile_picture'] = $request->file('profile_picture')->store('profile_picture', 'public');
        }

        if ($request->hasFile('document')) {
            // Delete old document file
            if ($oldDocumentPath) {
                Storage::disk('public')->delete($oldDocumentPath);
            }
            // Store new document file
            $formFields['document'] = $request->file('document')->store('document', 'public');
        }

        $business_Card->update($formFields);
        return redirect('/my-account')->with('message', 'Biz Card updated successfully !');
        // dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Business_Card  $business_Card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business_Card $business_Card)
    {
        if ($business_Card->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $business_Card->delete();
        return redirect('/my-account')->with('message', 'Listing deleted succesfully !');
    }

    public function manage()
    {
        // dd(auth()->user()->bizcards()->get());

        return view('bizcards.manage', ['listings' => auth()->user()->bizcards()->get()]);
    }

    public function downloadVCard(Business_Card $business_Card)
    {
        // Create vCard content
        $vCardContent = "BEGIN:VCARD\nVERSION:3.0\n";
        $vCardContent .= "FN:{$business_Card->your_name}\n";
        $vCardContent .= "ORG:{$business_Card->business_name}\n";
        $vCardContent .= "TITLE:{$business_Card->job_title}\n";
        $vCardContent .= "TEL:{$business_Card->phone}\n";
        $vCardContent .= "EMAIL:{$business_Card->email}\n";
        $vCardContent .= "URL:{$business_Card->website}\n";
        $vCardContent .= "ADR:;;{$business_Card->physical_address};;;;\n";
        $vCardContent .= "X-SOCIALPROFILE:{$business_Card->linkedin}\n";
        $vCardContent .= "X-SOCIALPROFILE:{$business_Card->twitter}\n";
        $vCardContent .= "X-SOCIALPROFILE:{$business_Card->facebook}\n";
        $vCardContent .= "X-SOCIALPROFILE:{$business_Card->instagram}\n";
        $vCardContent .= "X-SOCIALPROFILE:{$business_Card->youtube}\n";
        $vCardContent .= "X-SOCIALPROFILE:{$business_Card->pinterest}\n";
        $vCardContent .= "PHOTO;VALUE=URL:" . asset('storage/' . $business_Card->logo) . "\n";
        $vCardContent .= "PHOTO;VALUE=URL:" . asset('storage/' . $business_Card->profile_picture) . "\n";
        $vCardContent .= "END:VCARD";
        // Create response with vCard content
        $response = new Response($vCardContent);
        $response->header('Content-Type', 'text/vcard');
        $response->header('Content-Disposition', "attachment; filename={$business_Card->name}.vcf");

        return $response;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Business_Card  $business_Card
     * @return \Illuminate\Http\Response
     */
    public function download(Business_Card $business_Card)
    {
        return view('bizcards.download', ['listing' => $business_Card]);
    }
}
