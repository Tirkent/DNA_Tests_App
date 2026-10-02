<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    //
    public function topicsadd(Request $request)
    {
        //setting constraints (requirements) for the parameters to be entered into the database for the "Topics" table
        $incomingFields = $request->validate([
            'title'            => 'required|max:70',
            'number_questions' => 'required|numeric|min:1|max:99',
            'description'      => 'nullable',
            'image'            => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,jfif|max:1000',
            'text_file'        => 'required|mimes:csv,txt,pdf,docx|max:2048'
        ]);

        //Check if the image has been uploaded
        if ($request->hasFile('image')) {
            //Creating a unique file name
            $imageName = time() . '_img_' . $request->file('image')->getClientOriginalName();
            //Saving the image
            $imagePath = $request->file('image')->storeAs('uploads/images', $imageName, 'public');
            //Creates a URL to the image for DB
            $incomingFields['image'] = '/storage/' . $imagePath;
        }
        //Saving text file
        if ($request->hasFile('text_file')) {
            $fileName = time() . '_file_' . $request->file('text_file')->getClientOriginalName();
            //Saving the text file
            $filePath = $request->file('text_file')->storeAs('uploads/files', $fileName, 'public');
            //Creates a URL to the text file for DB
            $incomingFields['text_file'] = '/storage/' . $filePath;
        }

        $topic = Topic::create($incomingFields);
        dd('Записът е успешен! Ето създадения обект:', $topic);
    }
}
