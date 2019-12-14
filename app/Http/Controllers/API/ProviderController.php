<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Players;
use App\Http\Resources\Player as PlayersAPI;
class ProviderController extends Controller
{
    public function importData(Request $request){

        $provider=$request->input('provider_api');
        $response = file_get_contents($provider);
        $collection = collect(json_decode($response,true));
           
           $elements= $collection['elements'];
           $total_players=0;
           $interation=100;
    
           foreach($elements as $data ){
               $total_players+=1;
               
               $arr[]=array(
                'id'=>$data['id'],
                'first_name'=>$data['first_name'],
                'second_name'=>$data['second_name'],
                'form'=>$data['form'],
                'total_points'=>$data['total_points'],
                'influence'=>$data['influence'],
                'creativity'=>$data['creativity'],
                'threat'=>$data['threat'],
                'ict_index'=>$data['ict_index'],
               );
    
               if($total_players==$interation){
               break;
               }
                  
           } 
         Players::insert($arr);  
         return redirect()->back();
        


    }

    public function players_api(){
        $players = Players::orderBy('id','asc')->paginate(50);
        $players_data=PlayersAPI::collection($players);
        return  $players_data;
    }
    public function detail_api($id){
       $player=Players::findOrFail($id);
       $player= new PlayersAPI($player);
       return $player;
    }


    public function players_view(){
        $players_data=$this->players_api();
        return view('players',compact(['players_data']));
    }

    public function details_view($id){
        $player=$this->detail_api($id);
        return view('detail',compact(['player']));
    }
}
