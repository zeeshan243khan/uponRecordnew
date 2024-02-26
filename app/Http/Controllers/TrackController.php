<?php

namespace App\Http\Controllers;
use App\Models\Track;
use Illuminate\Http\Request;
use App\Models\Release;
class TrackController extends Controller
{
    //
   
  
       /*  public function index(Release $release){
         
           $tracks = Track::latest()->paginate(5);
       

           return view('tracks.index',compact('release','tracks'))->with('i', (request()->input('page', 1) - 1) * 5);;
            
        } */
       

  
   /*  public function store(Request $request)
    {
        //
        $request->validate([
            'content_type' => 'required',
            'primary_track_type' => 'required',
            
        ]);
  
        $input = $request->all();
  
        Track::create($input);
     
       
        return back()->with('success', 'track created successfully!');
    } */

    
    public function insertData(Request $request)
    {
        $input = [
            'data' => [
                'Content_type' => $request->content_type,
                'Primarytrack_type' => $request->primary_track_type,
                'Secondarytrack_type' => $request->secondary_track_type,
                'Instrumental' => $request->instrumental,
                'Title' => $request->title,
                'Version' => $request->version,
                'Primary_artist' => $request->primary_artist,
                'Featuring' => $request->featuring,
                'Remixer' => $request->remixer,
                'Author' => $request->author,
                'Composer' => $request->composer,
                'Arranger' => $request->arranger,
                'Pline' => $request->pline,
                'ProductionYear' => $request->productionYear,
                'Publisher' => $request->publisher,
                'ISRC' => $request->isrc,
                'Generate_isrc' => $request->generate_isrc,
                'Title2' => $request->title2,
                'IdGenre' => $request->idGenre,
                'IdSaleType' => $request->idSaleType,
                'Producercatalognumber' => $request->Producercatalognumber,
                'Advisory' => $request->advisory,
                'Previewstart' => $request->Previewstart,
                'MetadataLanguage' => $request->metadataLanguage,
                'IdLyricsSelect' => $request->idLyricsSelect,
                'Lyrics' => $request->lyrics

            ]
        ];
        $input['user_id']=$request->user_id;
       // print_r($input);
       // exit();
        if (Track::create($input)) {
            $response = ['msg' => 'Data Inserted Successfully'];
        } else {
            $response = ['msg' => 'Data Insertion Failed'];
        }
        return response()->json($response);
    }

    public function editData(Request $request,$id)
    {
        
        $input = [
            'data' => [
                'Content_type' => $request->editcontent_type,
                'Primarytrack_type' => $request->editprimary_track_type,
                'Secondarytrack_type' => $request->editsecondary_track_type,
                'Instrumental' => $request->editinstrumental,
                'Title' => $request->edittitle,
                'Version' => $request->editversion,
                'Primary_artist' => $request->editprimary_artist,
                'Featuring' => $request->editfeaturing,
                'Remixer' => $request->editremixer,
                'Author' => $request->editauthor,
                'Composer' => $request->editcomposer,
                'Arranger' => $request->editarranger,
                'Pline' => $request->editpline,
                'ProductionYear' => $request->editproductionYear,
                'Publisher' => $request->editpublisher,
                'ISRC' => $request->editisrc,
                'Generate_isrc' => $request->editgenerate_isrc,
                'Title2' => $request->edittitle2,
                'IdGenre' => $request->editidGenre,
                'IdSaleType' => $request->editidSaleType,
                'Producercatalognumber' => $request->editProducercatalognumber,
                'Advisory' => $request->editadvisory,
                'Previewstart' => $request->editPreviewstart,
                'MetadataLanguage' => $request->editmetadataLanguage,
                'IdLyricsSelect' => $request->editidLyricsSelect,
                'Lyrics' => $request->editlyrics

            ]
        ];
        $input['user_id']=$request->user_id;
        $product = Track::find($id);
        if ($product->update($input)) {
            $response = ['msg' => 'Data Updated Successfully'];
        } else {
            $response = ['msg' => 'Data Update Failed'];
        }
        return response()->json($response);
    }

    public function FetchData()
    {
        $response = Track::all();
        return response()->json($response);
    }
    public function FetchData_byID(Request $request)
    {
        $productId = $request->id;
        $product = Track::find($productId);
        return response()->json($product);
    }

    public function Destroy(Request $request)
    {
        $productId = $request->id;
        $product = Track::find($productId);
        if ($product) {
            $product->delete();
            $response = ['msg' => 'Product deleted successfully'];
        } else {
            $response = ['msg' => 'Product not found'];
        }

        return response()->json($response);
    }





   
  

    

}
