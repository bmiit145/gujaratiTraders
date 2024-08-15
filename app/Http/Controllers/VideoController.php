<?php



namespace App\Http\Controllers;



use Illuminate\Contracts\Foundation\Application;

use Illuminate\Contracts\View\Factory;

use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

use App\Models\Video;

use Illuminate\Support\Facades\Storage;

use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;

use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;



class VideoController extends Controller

{

    public function video()

    {

        $videos = Video::all();

        return view('uplode', compact('videos'));

    }



    public function uploadLargeFiles(Request $request) {

        $receiver = new FileReceiver('file', $request, HandlerFactory::classFromRequest($request));

    

        if (!$receiver->isUploaded()) {

            // File not uploaded

            return response()->json(['error' => 'File not uploaded'], 400);

        }

    

        $fileReceived = $receiver->receive(); // Receive file

    

        if ($fileReceived->isFinished()) { // File uploading is complete / all chunks are uploaded

            $file = $fileReceived->getFile(); // Get file

            $extension = $file->getClientOriginalExtension();

            $fileName = uniqid() . '.' . $extension; // Unique file name

           

            // Store the file in the public disk

            $path = 'videos/' . $fileName;

            Storage::disk('public')->putFileAs('videos', $file, $fileName);

    

            // Save file details to the database

            $video = new Video();

            $video->video_name = $fileName;

            $video->video = $path;

            $video->description = $request->input('description'); // Assuming 'description' is passed in the request

            $video->save();

    

            // Delete the uploaded file

            unlink($file->getPathname());

    

            return response()->json([

                'path' => asset('storage/' . $path),

                'filename' => $fileName

            ]);

        }

    

        // Otherwise, return percentage information

        $handler = $fileReceived->handler();

        return response()->json([

            'done' => $handler->getPercentageDone(),

            'status' => true

        ]);

    }


    // public function uploadLargeFiles(Request $request)
    // {
    //     $receiver = new FileReceiver('file', $request, HandlerFactory::classFromRequest($request));

    //     if (!$receiver->isUploaded()) {
    //         return response()->json(['error' => 'File not uploaded'], 400);
    //     }

    //     $fileReceived = $receiver->receive();

    //     if ($fileReceived->isFinished()) {
    //         $file = $fileReceived->getFile();
    //         $extension = $file->getClientOriginalExtension();
    //         $fileName = uniqid() . '.' . $extension;

    //         // Store the original file temporarily
    //         $tempPath = $file->storeAs('videos/temp', $fileName, 'public');

    //         // Transcode the video to HLS
    //         $outputPath = 'videos/' . uniqid();
    //         $m3u8Path = $outputPath . '.m3u8';
    //         $this->transcodeToHLS(storage_path('app/public/' . $tempPath), storage_path('app/public/' . $outputPath));

    //         // Save video information to the database
    //         $video = new Video();
    //         $video->video_name = $fileName;
    //         $video->video = $m3u8Path;
    //         $video->description = $request->input('description');
    //         $video->save();

    //         // Clean up temporary file
    //         Storage::disk('public')->delete($tempPath);

    //         return response()->json([
    //             'path' => asset('storage/' . $m3u8Path),
    //             'filename' => $fileName
    //         ]);
    //     }

    //     $handler = $fileReceived->handler();
    //     return response()->json([
    //         'done' => $handler->getPercentageDone(),
    //         'status' => true
    //     ]);
    // }

    protected function transcodeToHLS($inputFile, $outputDir)
    {
        $command = "ffmpeg -i {$inputFile} -codec: copy -start_number 0 -hls_time 10 -hls_list_size 0 -f hls {$outputDir}.m3u8";
        exec($command);
    }

}

