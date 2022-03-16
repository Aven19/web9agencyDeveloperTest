<?php

namespace App\Http\Controllers;

use App\Models\TShirtPacks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClothesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packs = TShirtPacks::orderBy('pack_size', 'asc')->paginate(15);

        return view('welcome', compact('packs'));
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
        $messages = [
            'number_of_tshirts.required' => 'Please add number of t-Shirts'
        ];

        $validator = Validator::make($request->all(), [
            'number_of_tshirts' => 'required|integer|min:1',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $numberOfTShirtsOrder = $request->input('number_of_tshirts');

        $counts = array_count_values(self::tShirtPacks($numberOfTShirtsOrder));

        $response = array();
        foreach ($counts as $key => $value) {
            $response[] = $key . ' x ' . $value;
        }

        return redirect()->back()->with('message', "Number of Packs = " . join(",", $response));
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

    public static function tShirtPacks($numberOfTShirts)
    {

        $packs = TShirtPacks::select('pack_size')->orderBy('pack_size', 'asc')->get()->toArray();

        $numberOfSizes = array();
        foreach ($packs as $key => $pack) {
            $numberOfSizes[] = $pack['pack_size'];
        }
        sort($numberOfSizes);

        $returnPacks = array();
        if ($numberOfTShirts <= $numberOfSizes[0]) {

            $returnPacks[] = $numberOfSizes[0];
            return $returnPacks;
        } else {

            $returnPackSize = array();

            while (array_sum($returnPackSize) < $numberOfTShirts) {
                $returnPackSize[] = self::getClosest($numberOfTShirts - array_sum($returnPackSize), $numberOfSizes);
            }

            $counts = array_count_values($returnPackSize);
            if (array_key_exists($numberOfSizes[0], $counts)) {

                if ($counts[$numberOfSizes[0]] > 1) {

                    if ($numberOfTShirts > $numberOfSizes[0]) {
                        $returnPackSize[] = $numberOfSizes[1];
                    } else {
                        $returnPackSize[] = self::getClosest($numberOfSizes[0] * $counts[$numberOfSizes[0]], $numberOfSizes);
                    }

                    $txt = array_diff($returnPackSize, [$numberOfSizes[0]]);
                    return array_values($txt);
                }
                return array_values($returnPackSize);
            }

            return $returnPackSize;
        }
    }

    public static function rec($array, $number)
    {
    }

    public static function getNumberOfPacks($array, $number)
    {
        sort($array);
        foreach ($array as $a) {
            if ($a >= $number) return $a;
        }
        return end($array); // or return NULL;
    }

    public static function getClosest($search, $arr)
    {
        $closest = null;
        foreach ($arr as $item) {
            if ($closest === null || abs($search - $closest) > abs($item - $search)) {
                $closest = $item;
            }
        }

        return $closest;
    }
}
