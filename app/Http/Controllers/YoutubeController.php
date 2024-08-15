<?php

namespace App\Http\Controllers;

use Google_Client;
use Google_Service_YouTube;
use Illuminate\Http\Request;
use Exception;

class YoutubeController extends Controller
{
    public function youtube_playlist(Request $request)
    {
        // Set up Google client
        $client = new Google_Client();
        $client->setApplicationName('API code samples');
        $client->setClientId(env('YOUR_CLIENT_ID'));
        $client->setClientSecret(env('YOUR_CLIENT_SECRET'));
        $client->setRedirectUri(env('YOUR_REDIRECT_URI')); 
        $client->setScopes([
            'https://www.googleapis.com/auth/youtube.force-ssl',
        ]);
        
        // Set the path to your client_secret.json file
        $clientSecretPath = storage_path('app\client_secret.json');
        if (!file_exists($clientSecretPath)) {
            throw new Exception('client_secret.json file not found.');
        }
        
        $client->setAuthConfig($clientSecretPath);
        $client->setAccessType('offline');
        
        // Check if the user is already authorized
        if ($accessToken = session('access_token')) {
            // Set access token to the client
            $client->setAccessToken($accessToken);
    
            // Initialize YouTube service
            $youtube = new Google_Service_YouTube($client);
    
            try {
                // Get channel's uploads playlist
                $channelsResponse = $youtube->channels->listChannels('contentDetails', array(
                    'mine' => 'true',
                ));
    
                // Extract uploads playlist ID
                $uploadsPlaylistId = $channelsResponse->items[0]->contentDetails->relatedPlaylists->uploads;
    
                // Get videos from the uploads playlist
                $playlistItemsResponse = $youtube->playlistItems->listPlaylistItems('snippet', array(
                    'playlistId' => $uploadsPlaylistId,
                    'maxResults' => 10, // You can adjust this to get more or fewer videos
                ));
    
                // Extract video details from the response
                $videos = $playlistItemsResponse->items;
    
                // Pass videos to the view
                return view('Admin.Youtube_video.youtube-video', ['videos' => $videos] );
            } catch (Google_Service_Exception $e) {
                // Handle Google service exception
                return redirect()->back()->with('error', 'Google service error: ' . $e->getMessage());
            }
        } else {
            // Generate a URL to authorize the user
            $authUrl = $client->createAuthUrl();
      
            // Pass $authUrl variable to the view
            return view('Admin.Youtube_video.youtube-video', ['authUrl' => $authUrl]);
        }
    } 
}
