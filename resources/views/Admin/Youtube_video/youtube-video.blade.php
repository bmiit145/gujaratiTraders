@extends('Admin.admin-dashboard')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #video-items{
            display: flex;
            flex-wrap: wrap;
        }

        .video-container{
            width:33.33%;
            margin-bottom: 50px;
            padding:10px;
        }

            h3{
                font-size: 20px;
            }
        
        @media screen and (max-width:1600px){
            h3{
                font-size: 18px;
            }

            .video-container{
                width:33.33%;
                margin-bottom: 5px;
                padding:10px;
            }
        }
        @media screen and (max-width:1200px){
            .video-container{
                width:33.33%;
                margin-bottom: 5px;
                padding:10px;
            }
            h3{
                font-size: 15px;
            }
        }
        
        @media screen and (max-width:1024px){
            .video-container{
                width:50%;
                margin-bottom: 5px;
                padding:10px;
            }
            h3{
                font-size: 15px;
            }
        }
        
        @media screen and (max-width:576px){
            .video-container{
                width:100%;
                margin-bottom: 0px;
                padding:10px;
            }

            h3{
                font-size: 15px;
            }
        }

        .pagination-container {
            margin-top: 20px;
            text-align: center;
        }

        .pagination-button {
            margin: 0 5px;
            padding: 5px 10px;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: #f0f0f0;
        }

        .pagination-button.active {
            background-color: #007bff;
            color: #fff;
        }
    </style>

    <center>
        <h2 style="color: rgb(16, 146, 70)">Gujrati Trader Videos</h2>
    </center>
    <div id="video-items" class="d-flex justify-content-center">
        
    </div>
    <div id="pagination" class="pagination-container"></div>
    <script src="js/youtube.js"></script>

@endsection