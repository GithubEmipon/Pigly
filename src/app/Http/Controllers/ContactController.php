<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request\ContactRequest;
use App\Models\WeightLogs;
use App\Models\WeightTarget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Symfony\Component\HttpFoundation\StreamedResponse;


class ContactController extends Controller
{
    public function create(ContactRequest $request)
    {
        $Contact = $request->all();
        return view('/create' ,compact('weight_logs'));
    }

    public function store(ContactRequest $request){

        if ($request->has('back')){
            return redirect('/goal_setting')->withInput();
        }

        Contact::create(
            $request->only([
            'date',
            'weight',
            'calories',
            'exercise_time',
            'exercise_content'
            ])
        );
        return view ('/weight_logs');
    }


    public function weight_logs()
    {
        $Contact = WeightLogs::simplePaginate(8);

        return view('/weight_logs', ['this','WeightLogs', 'WeightTarget']);
    }

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/weight_logs');
    }
}