@php
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')
    <style>
        .youtube-channel-page {
            font-family: Arial, sans-serif;
        }

        .channel-header {
            background-color: #f5f5f5;
            padding: 20px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .channel-banner img {
            width: 100%;
            height: auto;
            max-height: 200px;
            object-fit: cover;
        }

        .channel-info {
            display: flex;
            align-items: center;
            margin-top: -50px;
        }

        .channel-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
            border: 4px solid white;
        }

        .channel-details {
            flex-grow: 1;
        }

        .channel-title {
            font-size: 24px;
            margin: 0;
        }

        .channel-subscribers {
            color: #888;
            margin-top: 5px;
        }

        .channel-tabs ul {
            display: flex;
            padding: 0;
            margin: 20px 0;
            list-style-type: none;
        }

        .channel-tabs ul li {
            margin-right: 20px;
        }

        .channel-tabs ul li a {
            text-decoration: none;
            color: #555;
            font-weight: bold;
        }

        .channel-tabs ul li a:hover {
            color: #000;
        }

        .channel-content {
            margin-top: 30px;
        }

        .videos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .video-card {
            border: 1px solid #e0e0e0;
            padding: 10px;
            border-radius: 5px;
            background-color: white;
            transition: box-shadow 0.3s ease;
        }

        .video-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .video-card h3 {
            font-size: 16px;
            margin-top: 10px;
            color: #333;
            text-align: center;
        }

        .video-card:hover {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }
    </style>

<div class="youtube-channel-page">
    <div class="channel-header">
        <div class="container">
            <div class="channel-banner">
                <img src="https://example.com/your-channel-banner.jpg" alt="Example Channel">
            </div>
            <div class="channel-info">
                <img class="channel-avatar" src="https://example.com/your-channel-avatar.jpg" alt="Example Channel">
                <div class="channel-details">
                    <h1 class="channel-title">Example Channel</h1>
                    <p class="channel-subscribers">1,000 subscribers</p>
                    <p class="channel-description">This is an example YouTube channel description.</p>
                </div>
            </div>
            <div class="channel-tabs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Playlists</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">Channels</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="channel-content container">
        <h2>Latest Videos</h2>
        <div class="videos-grid">
            <div class="video-card">
                <a href="https://www.youtube.com/watch?v=Video1Id" target="_blank">
                    <img src="https://example.com/video1-thumbnail.jpg" alt="First Video Title">
                    <h3>First Video Title</h3>
                </a>
            </div>
            <div class="video-card">
                <a href="https://www.youtube.com/watch?v=Video2Id" target="_blank">
                    <img src="https://example.com/video2-thumbnail.jpg" alt="Second Video Title">
                    <h3>Second Video Title</h3>
                </a>
            </div>
            <!-- Add more video cards as needed -->
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Add any page-specific scripts here -->
@endsection
